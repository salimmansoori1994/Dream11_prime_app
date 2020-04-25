<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	
		public function __construct(){
		parent::__construct(); 	
		$this->load->model('User_model');	
			if(!$this->session->userdata('user_id')){
			return redirect(base_url('Login'));
	   }
		}


	public function index()
	{
		//echo $this->encrypt->encode('admin123');die;		
		$data['user']=$this->User_model->select("register_users","");
		$data['match']=$this->User_model->select("match","");
		$this->load->view('dashboard',$data);
	}
	
	
	public function logout(){
		$this->session->sess_destroy();
		return redirect(base_url('Login'));
	}	
	
		
	
	
}

