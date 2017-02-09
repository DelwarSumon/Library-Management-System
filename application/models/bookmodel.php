<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Bookmodel extends CI_Model {
	
	public function insert($b_name,$a_name,$c_name,$b_code,$b_year)
	{
		$sql1 = "INSERT INTO booklist VALUES ('',$b_name','$a_name','$c_name','$b_code','$b_year')";
		
		$this->load->database();
		$this->db->query($sql1);
		
	}
	public function addaut($a_name)
	{
		//$sql1 = "INSERT INTO booklist VALUES ('',$b_name','','','$b_code','$b_year','$b_image')";
		$sql ="INSERT INTO author VALUES('','$a_name')";
		$this->load->database();
		$this->db->query($sql);
	}
	public function addcat($c_name)
	{
		//$sql1 = "INSERT INTO booklist VALUES ('',$b_name','','','$b_code','$b_year','$b_image')";
		$sql ="INSERT INTO category VALUES('','$c_name')";
		$this->load->database();
		$this->db->query($sql);
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
}