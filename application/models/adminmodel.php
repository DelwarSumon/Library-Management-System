<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adminmodel extends CI_Model {
	
	public function getAll($email)
	{
		$this->load->database();
		
		$sql = "SELECT * FROM admin WHERE AdminEmail='$email'";
		$res = $this->db->query($sql);
		
		//print_r($res);
		$res = $res->row_array();
		$this->session->userdata('login_admin', '$email');
		return $res;
	}
	public function booklist()
	{
		$this->load->database();
		
		$sql = "SELECT * FROM booklist";
		$res = $this->db->query($sql);
		
		//print_r($res);
		$resbook = $res->result_array();
		//$this->session->userdata('login_admin', '$email');
		return $resbook;
	}
	public function getBname($search_bname)
	{
		$this->load->database();
		/*$sql = "SELECT BookName FROM booklist where BookName like '$search_bname%'";
		$resbname = $this->db->query($sql);
		
		print_r($resbname);
		return $resbname->result_array();*/
		
		$this->db->select('BookName');
        $this->db->from('booklist');
        $this->db->like('BookName',$search_bname,'after');

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
	}
	public function getAut()
	{
		$this->load->database();
		$sql = "SELECT * FROM author ORDER BY a_id";
		$resaut = $this->db->query($sql);
		return $resaut->result_array();
	}
	public function getCat()
	{
		$this->load->database();
		$sql = "SELECT * FROM category ORDER BY c_id";
		$rescat = $this->db->query($sql);
		return $rescat->result_array();
	}
	public function bookname()
	{
		$this->load->database();
		
		$sql = "SELECT * FROM booklist ORDER BY Id DESC";
		$res = $this->db->query($sql);
		
		//print_r($res);
		$resbookname = $res->row_array();
		//$this->session->userdata('login_admin', '$email');
		return $resbookname;
	}
	
}