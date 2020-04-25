<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Match extends CI_Controller {
	
	
		public function __construct(){
		parent::__construct(); 	
		$this->load->model('User_model');	
			if(!$this->session->userdata('user_id')){
			return redirect(base_url('Login'));
	   }
		}


	public function index()
	{
			$data['match_all']=$this->User_model->select("match","");	
		$this->load->view('match',$data);
	}
	
	
	public function add_new(){
		if($this->input->post()){
			
			 if(!empty($_FILES['icon_img_team1']['name'])){
						$config['upload_path'] =APPPATH.'../asset/Gallery/team_icon';
						$config['allowed_types'] = '*'; 
						$config['file_name'] = 'team1'."_".time();
						$config['overwrite'] = false;
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if(!($this->upload->do_upload("icon_img_team1"))){
						$data['error']['icon_img_team1'] = $this->upload->display_errors();
						}else{
						$coverPhotoData = $this->upload->data(); 
						$icon_img_team1 =$coverPhotoData['file_name'];
						}
						}
						
						 if(!empty($_FILES['icon_img_team2']['name'])){
						$config['upload_path'] =APPPATH.'../asset/Gallery/team_icon';
						$config['allowed_types'] = '*'; 
						$config['file_name'] = 'team2'."_".time();
						$config['overwrite'] = false;
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if(!($this->upload->do_upload("icon_img_team2"))){
						$data['error']['icon_img_team2'] = $this->upload->display_errors();
						}else{
						$coverPhotoData = $this->upload->data(); 
						$icon_img_team2 =$coverPhotoData['file_name'];
						}
						}
						
		$data=array(
		"name"=>$this->input->post('name'),	
		"team1"=>$this->input->post('team1'),	
		"team2"=>$this->input->post('team2'),	
		"icon_img_team1"=>$icon_img_team1,	
		"icon_img_team2"=>$icon_img_team2,	
		"match_date"=>$this->input->post('match_date'),	
		"match_time"=>DATE("H:i", STRTOTIME($this->input->post('match_time'))),	
		"type"=>$this->input->post('match_type'),
		"details"=>$this->input->post('details'),
		"create_date"=>time()
		);
		$id=$this->User_model->insert_data("match",$data);
		if($id){
			return redirect(base_url('Match'));
		}else{
			  echo "no";
		}
		
		}
	}	
	
	public function match_update(){
		if($this->uri->segment(3)){
			$match_id=base64_decode($this->uri->segment(3));
			$team_info=$this->User_model->select("match",array("id"=>$match_id));
			$data['match_id']=$team_info[0]->id;
			$data['match_name']=$team_info[0]->name;
			$data['match_update']=$this->User_model->select("match_update",array("match_id"=>$match_id));
			$this->load->view('match_update',$data);
			}else{
				return redirect(base_url('Match'));
			}
	}
	
		public function add_new_update(){
	if($this->input->post()){
	$data=array(
		"match_id"=>$this->input->post('match_id'),	
		"update_name"=>$this->input->post('update_name'),	
		"update_details"=>$this->input->post('update_details'),	
		"update_date"=>time()
		);
		$id=$this->User_model->insert_data("match_update",$data);
		if($id){
				return redirect(base_url('Match/match_update/'.base64_encode($this->input->post('match_id')).''));
		}
		}
		}
		
	public function match_team(){
			if($this->uri->segment(3)){
			$match_id=base64_decode($this->uri->segment(3));
			$team_info=$this->User_model->select("match",array("id"=>$match_id));
			$data['match_id']=$team_info[0]->id;
			$data['match_name']=$team_info[0]->name;
			$data['match_team']=$this->User_model->select("match_team",array("match_id"=>$match_id));
			$this->load->view('match_team',$data);
			}else{
				return redirect(base_url('Match'));
			}
	}
	
	
		public function add_new_team(){
	if($this->input->post()){
		
	    //set lead image
				 if(!empty($_FILES['team_pic']['name'])){
						$config['upload_path'] =APPPATH.'../asset/Gallery';
						$config['allowed_types'] = '*'; 
						$config['file_name'] = 'team'."_".$this->input->post('match_id')."_".time();
						$config['overwrite'] = false;
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if(!($this->upload->do_upload("team_pic"))){
						$data['error']['team_pic'] = $this->upload->display_errors();
						}else{
						$coverPhotoData = $this->upload->data(); 
						$coverPhoto =$coverPhotoData['file_name'];
						}
						}	
		
	$data=array(
		"match_id"=>$this->input->post('match_id'),	
		"team_name"=>$this->input->post('team_name'),	
		"team_details"=>$this->input->post('team_details'),	
		"team_pic"=>$coverPhoto,	
		"team_create_time"=>time()
		);
		$id=$this->User_model->insert_data("match_team",$data);
		if($id){
				return redirect(base_url('Match/match_team/'.base64_encode($this->input->post('match_id')).''));
		}
		}
		}
		
		
		
		public function delete_match(){
			if($this->uri->segment(3)){
				$match_id=base64_decode($this->uri->segment(3));
			
			$match=$this->User_model->select("match",array("id"=>$match_id));	
				$old_filepath_team1 = FCPATH."asset/Gallery/team_icon/" . $match[0]->icon_img_team1;
				unlink($old_filepath_team1);
				$old_filepath_team2 = FCPATH."asset/Gallery/team_icon/" . $match[0]->icon_img_team2;
				unlink($old_filepath_team2);
			$this->User_model->delete_data("match",array("id"=>$match_id));
						
				
		$match_team=$this->User_model->select("match_team",array("match_id"=>$match_id));
		
				foreach($match_team as $row){
					$old_filepath = FCPATH."asset/Gallery/".$row->team_pic;
						unlink($old_filepath);
				}
		
	
				
				$this->User_model->delete_data("match_team",array("match_id"=>$match_id));
				$this->User_model->delete_data("match_update",array("match_id"=>$match_id));
					return redirect(base_url('Match'));
			}
		}
		
		
		public function delete_match_update(){
		if($this->uri->segment(3) && $this->uri->segment(4)){
			$match_id=base64_decode($this->uri->segment(4));
			$update_id=base64_decode($this->uri->segment(3));
			$this->User_model->delete_data("match_update",array("match_id"=>$match_id,"id"=>$update_id));
			return redirect(base_url('Match/match_update/'.base64_encode($match_id).''));
		}
		}
		
		
			public function delete_match_team(){
		if($this->uri->segment(3) && $this->uri->segment(4)){
			$match_id=base64_decode($this->uri->segment(4));
			$team_id=base64_decode($this->uri->segment(3));
			$match_team=$this->User_model->select("match_team",array("match_id"=>$match_id,"id"=>$team_id));
				$old_filepath = FCPATH."asset/Gallery/" . $match_team[0]->team_pic;
				unlink($old_filepath);
			$this->User_model->delete_data("match_team",array("match_id"=>$match_id,"id"=>$team_id));
			return redirect(base_url('Match/match_team/'.base64_encode($match_id).''));
		}
		}
	
}

