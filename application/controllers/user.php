<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
	}
	
	public function index()
	{	
		$data['message'] = '';
		//$data['bl'] = '';
		//$data['bloodpurchase'] ='';
		$name=$this->session->userdata('login_names');
		$this->load->model('usermodel');
		$data['result'] = $this->usermodel->getAll();
		//$data['bloodpurchase'] = $this->usermodel->get($name);
		
		$this->load->view('view_userpanel', $data);
		
		
		
		
	}
	
	
}	