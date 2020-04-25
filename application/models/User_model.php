<?php 
 if ( ! defined('BASEPATH')) exit('Noinsert_data direct script access allowed');
 
class User_model extends CI_Model {

	public function select_row($table,$where){
		$this->db->where($where);
		$qurey=$this->db->get($table); //echo $str = $this->db->last_query(); die;
		if($qurey->num_rows()){
			return $qurey->row();
		}else{
			return false;
		}
		
	}
	
	
	public function select($table,$where,$limit="",$order=""){
			if($where!="")	{	$this->db->where($where);}

			if($limit!="")	{	$this->db->limit($limit);}

			if($order!="")	{	$this->db->order_by($order,'desc');	}
		
		$qurey=$this->db->get($table); 
		if($qurey->num_rows()){
			return $qurey->result();
		}else{
			return false;
		}
		
	}
	
	
		public function select_debug($table,$where,$limit="",$order=""){
			if($where!="")	{	$this->db->where($where);}

			if($limit!="")	{	$this->db->limit($limit);}

			if($order!="")	{	$this->db->order_by($order,'desc');	}
		
		$qurey=$this->db->get($table); echo $str = $this->db->last_query(); die;
		if($qurey->num_rows()){
			return $qurey->result();
		}else{
			return false;
		}
		
	}





	public function insert_data($tblname,$data){
		$this->db->insert($tblname, $data);
		return $this->db->insert_id(); 
		
	}
	
		public function update_data($tblname,$where,$data){
		$this->db->where($where);
		$query = $this->db->update($tblname,$data); //echo $str = $this->db->last_query(); die;
		return true; 
	}
	
	public function delete_data($tblname,$where){
		$this->db->where($where);
		$query = $this->db->delete($tblname);// echo $this->db->last_query(); die;
		return true;
	}
	

	
}
?>