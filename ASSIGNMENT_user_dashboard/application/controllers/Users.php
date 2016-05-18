<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	
	protected $view_data = array();
	protected $user_session = NULL;
	
	function __construct()
	{
		parent::__construct();
		$this->view_data['user_session'] = $this->user_session = $this->session->userdata("user_session");
	}
	
// ******* GO TO DASHBOARD IF SIGNED IN ELSE GO HOME *******
	public function index()
	//goes straight to DASHBOARD if signed in, else go to HOME page.
	{
		if($this->signinpage())
			redirect(base_url('dashboard)');
		}else{
			$this->load->view("home");
		}
	}

// ************* DID THE USER SIGNIN? *************
	// public function signinpage()
	public function is_login()
	{		
		if($this->user_session['is_logged_in']) && is_numeric($this->user_session['user_id]']))
			return TRUE;
		}else{
			return FALSE;
		}
		// $this->load->view("signin");
	}

// ******** IS THIS USER AN ADMIN? **********
	public function is_admin()
	{
		if($this->signinpage())
			return($this->user_session['user_level']==admin) ? TRUE : FALSE;
		}else{
			return FALSE;
		}
	}

// ************* LOGOUT **************
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}

// 	public function register()
// 	{
// 		$this->load->view("register");
// 	}
	
// 	public function adduser()
// 	{
// 		$this->load->view("new");
// 	}

// 	public function dashboard()
// 	{
// 		$this->load->view("dashboard");
// 	}

// 	public function profile()
// 	{
// 		$this->load->view("profile");
// 	}

// 	public function edit()
// 	{
// 		$this->load->view("edit");
// 	}

// 	public function admin()
// 	{
// 		$this->load->view("admin");
// 	}
	

// 	public function login()
// 	{		

// 		$this->load->library("form_validation");
// 		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
// 		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|md5");
		
// 		if($this->form_validation->run() === FALSE)
// 		{
// 			$this->session->set_flashdata("login_errors", validation_errors());
// 			redirect(base_url());
// 		}
// 		else
// 		{
// 			$this->load->model("user");							   
// 			$get_user = $this->user->get_user($this->input->post());

// 			if ($get_user)
// 			{
// 				$this->session->set_userdata("user_session", $get_user);
// 				$this->load->view("welcome");
// 			}
// 			else
// 			{
// 				$this->session->set_flashdata("login_errors", "Invalid email and/or password");
// 				redirect(base_url());
// 			}
// 		}
// 	}
	
// 	public function process_registration()
// 	{
// 		$this->load->library("form_validation");
// 		$this->form_validation->set_rules("first_name", "First Name", "trim|required");
// 		$this->form_validation->set_rules("last_name", "Last Name", "trim|required");
// 		$this->form_validation->set_rules("email", "Email", "trim|valid_email|required");
// 		$this->form_validation->set_rules("password", "Password", "trim|min_length[8]|required|matches[confirm_password]|md5");
// 		$this->form_validation->set_rules("confirm_password", "Confirm Password", "trim|required|md5");

// 		if($this->form_validation->run() === FALSE)
// 		{
// 			$this->session->set_flashdata("registration_errors", validation_errors());
// 			redirect(base_url());
// 		}
// 		else
// 		{
// 			$this->load->model("User");
// 			$user_input = $this->input->post();			
// 			$insert_user = $this->User->insert_user($user_input);
			
// 			if($insert_user)
// 			{				
// 				$this->session->set_userdata("user_session", $user_input);
// 				$this->load->view("welcome");
// 			}
// 			else
// 			{
// 				$this->session->set_flashdata("registration_errors", "Sorry but your info were not registered please try again.");
// 				redirect(base_url());
// 			}
// 		}
// 	}
	

	
// 	public function logout()
// 	{
// 		$user_session_data = $this->session->all_userdata();
		
// 		foreach($user_session_data as $key)
// 		{
// 			$this->session->unset_userdata($key);
// 		}
		
// 		$this->session->sess_destroy();
// 		redirect(base_url("index"));
// 	}
	
// }