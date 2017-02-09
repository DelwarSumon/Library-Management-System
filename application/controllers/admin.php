<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	
	public function index()
	{	
		if($this->input->post('buttonsearch'))
		{
			$search_bname = $this->input->post('search_bname');
			
			$data['message'] = '';
			
			$this->load->model('adminmodel');
			$data['results']=$this->adminmodel->getBname($search_bname);
			//print_r $resbname;
			$data['resbook'] = $this->adminmodel->booklist();
			$data['resaut']=$this->adminmodel->getAut();
			$data['rescat']=$this->adminmodel->getCat();
			//$name=$this->session->userdata('login_names',$result['name']);
			$this->load->view('view_adminpanel', $data);
		}
		else{
			
			$data['message'] = '';
			$data['bl'] = '';
			
			$this->load->model('adminmodel');
			$data['resbook'] = $this->adminmodel->booklist();
			$data['resaut']=$this->adminmodel->getAut();
			$data['rescat']=$this->adminmodel->getCat();
			//$name=$this->session->userdata('login_names',$result['name']);
			$this->load->view('view_adminpanel', $data);
		
		}
	
	}
	
}	