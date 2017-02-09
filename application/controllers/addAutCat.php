<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AddAutCat extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	
	public function index()
	{	
		
		
		if($this->input->post('authorsubmit'))
		{
			$a_name = $this->input->post('aname');
			$this->load->model('bookmodel');
			$this->bookmodel->addaut($a_name);
			
			//$this->load->view('view_addbook');
			redirect('http://localhost/library/addbook');
		
		}
		elseif($this->input->post('categorysubmit'))
		{
			$c_name = $this->input->post('catname');
			$this->load->model('bookmodel');
			$this->bookmodel->addcat($c_name);
			//$this->load->view('view_addbook');
			redirect('http://localhost/library/addbook');
		}
	
	}
	
}
?>	
