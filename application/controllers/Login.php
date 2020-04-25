<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	
		public function __construct(){
		parent::__construct(); 	
		$this->load->model('Login_model');	
			if($this->session->userdata('user_id')){
			return redirect(base_url('Dashboard'));
	   }
		}


	public function index()
	{
		//echo $this->encrypt->encode('admin123');die;		
		$this->load->view('login');
	}
	
	
	public function login(){
		if($this->input->post()){
	$check=$this->Login_model->login_valid("users",array("username"=>$this->input->post('username'),"password"=>$this->input->post("password")));
	if($check){
		$this->session->set_userdata("user_id",$check);
		return redirect(base_url('Dashboard'));
	}else{
			return redirect(base_url('Login?msg='.base64_encode("Invalid User Id Password").''));
	}
		}
		
	}	
	
	
}

