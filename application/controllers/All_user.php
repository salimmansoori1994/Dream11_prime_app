<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_user extends CI_Controller {
	
	
		public function __construct(){
		parent::__construct(); 	
		$this->load->model('User_model');	
			if(!$this->session->userdata('user_id')){
			return redirect(base_url('Login'));
	   }
		}


	public function index()
	{
		$data['user']=$this->User_model->select("register_users","");
		$this->load->view('all_user',$data);
	}
	

	
	
		
	
	
}

