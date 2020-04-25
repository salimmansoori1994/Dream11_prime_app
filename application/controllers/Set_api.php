<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set_api extends CI_Controller {
	
	
		public function __construct(){
		parent::__construct(); 	
		$this->load->model('Login_model');	
		$this->load->model('User_model');	
		}


	
	
	public function login(){
		if($this->input->post()){
	$check=$this->Login_model->login_valid("register_users",array("username"=>$this->input->post('username'),"password"=>$this->input->post("password")));
	if($check){
		$info=$this->User_model->select("register_users",array("id"=>$check));
		
		if(strtotime(date("Y-m-d")) < strtotime($info[0]->end_pakage_date)){
			$date1=date_create($info[0]->end_pakage_date);
			$date2=date_create(date('Y-m-d'));
			$diff=date_diff($date1,$date2);
			$match=$this->User_model->select("match","");
			$remaning = $diff->format("%R%a days");
			if($match){
			foreach($match as $key=>$rows){
				
				$rows->icon_img_team1=base_url("asset/Gallery/team_icon/".$rows->icon_img_team1);
				$rows->icon_img_team2=base_url("asset/Gallery/team_icon/".$rows->icon_img_team2);
				
				$match_update=$this->User_model->select("match_update",array("match_id"=>$rows->id));
				$match_team=$this->User_model->select("match_team",array("match_id"=>$rows->id));
				
					if($match_update){
				$match_update_count=count($match_update);
			}else{
				$match_update_count=0;
			}
			
				if($match_team){
				$match_team_count=count($match_team);
				foreach($match_team as $row){
					$match_team['team_pic']=base_url("asset/Gallery/".$row->team_pic);
				}
			}else{
				$match_team_count=0;
			}
			
			if($match_team || $match_update){
				$mass="Available";
			}else{
				$mass="Not Available";
			}
			
			$rows->match_update_count=$match_update_count;
			$rows->match_team_count=$match_team_count;
			
			
		}}
			
			
						$data=array(
						"Status"=>true,
						"Message"=>$remaning ." are remaining for plan",
						"match_count"=>count($match),
						"data"=>$match
						);
		}else{
						$data=array(  
						"Status"=>False,
						"Message"=>" Your Plan Days Are Completed Remove Your Id "
						);
			$this->User_model->delete_data("register_users",array("id"=>$check));
		}
					
					
	}else{
			$data=array(
					"Status"=>False,
					"Message"=>"Invalid ID & Password"
					);
	}
		}
		
		echo json_encode($data);
		
	}	
	
	
	public function match_details(){
		if($this->input->post()){
			$match_id=$this->input->post('match_id');
			$match_update=$this->User_model->select("match_update",array("match_id"=>$match_id));
			$match_team=$this->User_model->select("match_team",array("match_id"=>$match_id));
			if($match_update){
				$match_update_count=count($match_update);
			}else{
				$match_update_count=0;
			}
			
				if($match_team){
				$match_team_count=count($match_team);
				foreach($match_team as $row){
					$row->team_pic=base_url("asset/Gallery/".$row->team_pic);
				}
			}else{
				$match_team_count=0;
			}
			
			if($match_team || $match_update){
				$mass="Available";
			}else{
				$mass="Not Available";
			}
			
			$data=array(
						"Status"=>true,
						"Message"=>$mass,
						"match_update_count"=>$match_update_count,
						"match_team_count"=>$match_team_count,
						"data"=>array(
						"match_update"=>$match_update,
						"match_team"=>$match_team
						)
						);
						
						echo json_encode($data);
	}
	}
	
	
	
	public function skip_login(){ 
	$match=$this->User_model->select("match","");
	if($match){
		
					foreach($match as $key=>$rows){
						
						$rows->icon_img_team1=base_url("asset/Gallery/team_icon/".$rows->icon_img_team1);
				$rows->icon_img_team2=base_url("asset/Gallery/team_icon/".$rows->icon_img_team2);
				
				$match_update=$this->User_model->select("match_update",array("match_id"=>$rows->id));
				$match_team=$this->User_model->select("match_team",array("match_id"=>$rows->id));
				
					if($match_update){
				$match_update_count=count($match_update);
			}else{
				$match_update_count=0;
			}
			
				if($match_team){
				$match_team_count=count($match_team);
				foreach($match_team as $row){
					$match_team['team_pic']=base_url("asset/Gallery/".$row->team_pic);
				}
			}else{
				$match_team_count=0;
			}
			
			if($match_team || $match_update){
				$mass="Available";
			}else{
				$mass="Not Available";
			}
			
			$rows->match_update_count=$match_update_count;
			$rows->match_team_count=$match_team_count;
			
			
		}
		
		$data=array(
						"Status"=>true,
						"Message"=>"Available",
						"match_count"=>count($match),
						"data"=>$match
						);
						
	}else{
		$data=array(
						"Status"=>false,
						"Message"=>"Not Available"
						);
	}
	echo json_encode($data);
	}
	
	
}

