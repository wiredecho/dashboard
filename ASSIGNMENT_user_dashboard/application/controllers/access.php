<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Users.php");

class Access extends Users
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("User");
		
	}




	public function index()
	{
		$this->load->view("home"); //HOME PAGE WITH JUMBOTRON (FIRST PAGE)
	}

	public function login()
	{ 
		if($this->current_user)
		{
			redirect(base_url('dashboard'));
		}else{
			 $this->load->view("signin");	
		}
	}





	// ********  REGISTER, CHECKS TO SEE IF USER IS ALREADY LOGGED IN FIRST
	public function register()
	{
		if($this->current_user) //is the CURRENT USER(OWNER OF CURRENT PHP SCRIPT LOGGED?)
		{
			redirect(base_url('dashboard'));
		}else{
			 $this->load->view("register");
		}
	}





	// ************  LOGIN SECTION **************
	public function user_login()
	{
		if($this->input->post("form_action")=="Register")
		{
			// returns all POST items with XSS filter 
			$user = $this->input->post(NULL, TRUE); 
		    $register_user = $this->User->create_user_record($user);
		    
		    if($register_user["user_created"])
		    {
		    	$this->session->set_flashdata("success_message",$register_user["success_message"]);
		    }
		    else
		    {
		    	$this->session->set_flashdata("error_message",$register_user["error_message"]); 
		    }
		    redirect(base_url('register')); 
        }
		else if($this->input->post("form_action")=="Login")
		{
			$user = $this->input->post(NULL, TRUE);
			$login_user = $this->User->login_user($user);
			
			if($login_user["is_login"]) //THIS FUNCTION IS ON USER.PHP
			{ 
				$this->session->set_flashdata("success_message",$login_user["success_message"]);
				redirect(base_url('dashboard'));
			}
			else
			{
				$this->session->set_flashdata("error_message",$login_user["error_message"]);
				redirect(base_url('signin')); //example uses LOGIN
				 
			}
		}
		else
		{
			redirect(base_url('home')); //originally just had slash...phil changed to home
		}
	}





	// ************  DESTROY THIS SESSION ***********
	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata("error_message","Logged Out successfully");
		redirect(base_url('home'));  //Take me back home
	}

}

