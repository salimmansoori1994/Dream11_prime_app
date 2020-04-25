<?php 
 if ( ! defined('BASEPATH')) exit('Noinsert_data direct script access allowed');
 
class Login_model extends CI_Model {

	public function login_valid($tb_name,$where){
		
		$password_encoded = $where['password'];
		unset($where['password']);
	//print_r($where);
		$this->db->where($where);
		$qurey=$this->db->get($tb_name);// echo  $this->db->last_query(); die;
		
		if($qurey->num_rows() ){
			$password_fetched = $qurey->row()->password;
			
			if($password_encoded==$this->encrypt->decode($password_fetched))
			{
			return $qurey->row()->id;
			}
			else{
				return false;
			}
			return $qurey->row()->id;
		}else{
			return false;
		}
	}
	
}
?>