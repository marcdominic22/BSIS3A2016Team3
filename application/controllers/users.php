<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
    }	
	public function index()
	{
		$this->load->view('users/index');		
	}
	public function Login()
	{
		if ($this->input->post())
		{
			$this->load->model('Users_model');
			
			$data = $this->input->post();
			$this->Users_model->login($data['username'], $data ['password']);
			
			$result=$this->Users_model->login($data['username'], $data ['password']);
			
			if(!$result) {
				redirect('/users/admin/');
			}
			else {
				redirect ('/users');
			}
			
			echo $result;
			exit();
		}
		
		
	}
	
	public function admin()
	{
		$this->load->view('users/admin');
	}
	
	public function loginadmin()
	{
		$this->load->view('users/loginadmin');
	}
	
	public function register()
	{
		$this->load->view('users/register');
	}


	public function add() {
        $this->load->library('form_validation');
		
		//rules to become a member
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[3]|max_length[20]|matches[password]');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[20]');
		
		if ($this->form_validation->run() == FALSE) {
			//user didn't validate, send back to login form, show errors
			$this->load->view('users/register');
		}
		else {
			//add to database
			$this->load->model('Users_model');
			
			$result = $this->Users_model->insert_user();
			
			if ($result){
				$this->load->view('users/success', array('username' => $result));
				
			}
			else{
				//this should never occur
				echo 'Sorry, there\'s a problem with the website. Contact McDonalds for Jollibee food lol xD';
			}
			
			
		}
		}
}

?>