<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model {
	public function insert($u_name,$u_email,$u_gender,$u_pass,$u_cpass,$u_address,$u_phone)
	{
		$sql1 = "INSERT INTO registration VALUES ('','$u_name','$u_email','$u_gender','$u_pass','$u_cpass','$u_address','$u_phone')";
		
		$sql2 = "INSERT INTO usertype VALUES ('','$u_email','$u_pass','user')";
		$this->load->database();
		$this->db->query($sql1);
		$this->db->query($sql2);
	}
	
	public function resetpas($email,$pass,$cpass)
	{
		$sql1 = "UPDATE registration SET Email = '$email', Password = '$pass', ConfirmPassword = '$cpass' where Email ='$email' ";
		
		$sql2 = "UPDATE usertype SET Email = '$email', Password = '$pass' where Email ='$email'";
		$this->load->database();
		$this->db->query($sql1);
		$this->db->query($sql2);
	}
	public function getAll()
	{
		$this->load->database();
		$name=$this->session->userdata('login_names');
		$sql = "SELECT * FROM booklist";
		$result = $this->db->query($sql);
		return $result->result_array();
	}
	
}