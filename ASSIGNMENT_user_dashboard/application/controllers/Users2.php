<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('User.php');

class Users2 extends Users {
	
	public function __construct()
	{
		parent::__construct();
		//Three tables USERS MESSAGE COMMENT / THREE MODELS
		$this->load->model("Users");
		$this->load->model("Message"); //Example calls this Post
		$this->load->model("Comment");
	}




	public function index()
	{  
		$this->load->view("dashboard")	 //ALL USERS DASHBOARD...LISTS ALL USERS
	}






// ************  CHECKS TO SEE IF ADMIN THEN DIRECTED TO ADMIN PAGE INSTEAD ************
	public function list_users() 
	{
		$users = $this->User->get_all_users();
		//NEXT LINE CHECKS TO SEE IF USER INVOKING THIS FUNCTION IS ADMIN...IF SO GO TO ADMIN
		$this->load->view('admin',array('users'=> $users ,'is_admin' => $this->is_admin()));

	}




	public function profile()
	{	// LOADS PROFILE, PAGE WHERE NORMAL USER CAN EDIT INFO , ARRAY ID'S USER
		$this->load->view('profile',array('current_user'   => $this->current_user));
	}




	public function view_user($user_id)
	{	//ASSIGNS VARIABLES
		$user_details = $this->User->get_user_with_id($user_id);
		$get_all_users = $this->User->get_all_users();
		$message_details  = $this->Message->get_message_details_by_id($user_id);
		$all_comments  = $this->Comment->get_all_comments();
		//PLACES MESSAGES AND POSTS
		$this->load->view("information",array( 'user' => $user_details,
		        	'current_user' => $this->current_user,
					'message'        => $message_details,
					'all_users'    => $get_all_users,
					'comments'     => $all_comments ) );
	}




	// **********  CREATE MESSAGE **************
	public function create_message()
	{
		if($this->input->post("form_action")=="Post")
		{
			$post = $this->Post->create_post($this->input->post()) ;

			if($post['post_created'])
			{
				$this->session->set_flashdata("success_message",$post['success_message']);
			}else{
				$this->session->set_flashdata("error_message",$post['error_message']);
			}
		}
		redirect(base_url("information".$this->input->post('post_created_for')));
	}




	// **********  CREATE COMMENT **************
	public function create_comment()
	{	//IF REPLY BUTTON IS PUSHED THEN:
		if($this->input->post("form_action")=="Reply")
		{	
		 	$comment_created = $this->Comment->create_comment($this->input->message());
		 	$user = $this->Message->get_user_id_with_message_id($this->input->message('message_id') ) ;
            $user_id = $user['user_id'];

			if($comment_created['comment_created'])
			{
				$this->session->set_flashdata("success_message",$comment_created['success_message']);
			}else{
				$this->session->set_flashdata("error_message",$comment_created['error_message']);
			}
		}
		redirect(base_url("information").$user_id);
	}





	public function edit_user($user_id)
	{	
		if($this->is_admin() )
		{
			$user = $this->User->get_user_with_id($user_id);
			$this->load->view("dashboard/edit_user",array('user' => $user));
		}
		else
		{
			redirect(base_url('/'));
		}
	}

	public function update_user()
	{
		if($this->is_admin() && $this->input->post("form_action")=="Update User")
		{
			$user = $this->input->post(NULL,TRUE);
			if($this->User->update_user($user) )
			{
				$this->session->set_flashdata("success_message","User record updated successfully");
				redirect(base_url('/dashboard/list_users'));
			} 
			else
			{
				$this->session->set_flashdata("error_message","User record cant be updated");
				$this->load->view("information",array('user' => $user  )) ; 
			}
		}
		
	}

	public function delete_user($user_id)
	{
		if($this->is_admin() )
		{
			$id = $user_id;
			if($this->is_login() && $this->is_admin() )
			{
				if($this->User->delete_user($id))
				{
					$this->session->set_flashdata("success_message","User record deleted successfully");
				}
				else
				{
					$this->session->set_flashdata("error_message","User record can't be deleted");
				}
				redirect(base_url('/dashboard/list_users'));
			}
		}
		else
		{
			redirect(base_url('/'));
		}
	}
}