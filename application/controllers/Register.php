<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	
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
		$this->load->view('register');
	}
	
	public function add_new(){
		if($this->input->post()){
			$check=$this->User_model->select("register_users",array("username"=>$this->input->post('username')));
			if(!$check){
			$data=array(
		"name"=>$this->input->post('name'),	
		"number"=>$this->input->post('number'),	
		"username"=>$this->input->post('username'),	
		"password"=>$this->encrypt->encode($this->input->post('password')),	
		"pakage_day"=>$this->input->post('pakage_day'),	
		"select_pakage_date"=>$this->input->post('select_pakage_date'),	
		"end_pakage_date"=>date("Y-m-d", strtotime("".$this->input->post('select_pakage_date')." +".$this->input->post('pakage_day')." day")),	
		"details"=>$this->input->post('details')
		);
		$id=$this->User_model->insert_data("register_users",$data);
		if($id){
				echo "yes";
		}else{
			echo "no";
		}
		
		}else{
				echo "exists";
		}
		
		}
	}
	
	
		
	
	
}

