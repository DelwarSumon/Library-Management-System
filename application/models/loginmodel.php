<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginmodel extends CI_Model {

	
	public function login($email,$password)
	{
		
		/*$this->load->database();
		$sql = "SELECT Email FROM registration WHERE Email='$email' and Password='$password'";
		$result = $this->db->query($sql);
		
		*/
		
		//$this->db->select('Email');
		$this->db->from('usertype');
		$this->db->where('Email',$email);
		$this->db->where('Password',$password);
			
		$query=$this->db->get();
		$result=$query->row_array();
		
		//print_r($result);
		//print_r($email);
		//$this->session->set_userdata('login_names',"$email");
		//return $result->result_array();
				
		return $result;	
			
	}
	
}