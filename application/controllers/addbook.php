<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Addbook extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	
	public function index()
	{	
		if($this->input->post('buttonAddbook'))
		{
			/*if(!$this->form_validation->run('addbook'))
			{
				$data['message'] = validation_errors();
				$this->load->view('view_addbook', $data);
			}
			else
			{*/
		
				$b_name = $this->input->post('bname');
				$a_name = $this->input->post('autname');
				$c_name = $this->input->post('catname');
				$b_code=$this->input->post('bookcode');
				$b_year=$this->input->post('year');
				//$b_image=$this->input->post('image');
				
				
				$this->load->model('bookmodel');
				$this->bookmodel->insert($b_name,$a_name,$c_name,$b_code,$b_year);
				//$this->load->view('view_adminpanel');
				redirect('http://localhost/library/admin/');
				
			//}
		}
		else
		{
			$data['message'] = "";
			$this->load->model('bookmodel');
			$data['resaut']=$this->bookmodel->getAut();
			$data['rescat']=$this->bookmodel->getCat();
			
			$this->load->view('view_addbook', $data);
		}
	
		
	
	}
	
}
?>	