<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
	}
	public function index()
	{
		if($this->input->post('buttonlogin'))
		{
			if(!$this->form_validation->run('signin'))
			{
				$data['message'] = validation_errors();
				$this->load->view('view_login', $data);
			}
			else
			{
				$email= $this->input->post('email');
				$password= $this->input->post('password');
				
				
				
				$this->load->model('Loginmodel');
			
				if($this->Loginmodel->login($email,$password))
				{
					$result=$this->Loginmodel->login($email,$password);
					
					//print_r($result);
					if($result['Type']=='admin')
					{
						if($result['Email']==$email && $result['Password']==$password){
							//echo $email;
							$this->load->model('adminmodel');
							$res=$this->adminmodel->getAll($email);
							//print_r($res);
							$name = $res['name'];
							$this->session->set_userdata('login_myname',"$name");
							
							//$this->load->view('view_reg');
							redirect('http://localhost/library/admin');
						}
					}
					else if($result['Type']=='user')
					{
						if($result['Email']==$email && $result['Password']==$password){
							$this->load->view('view_userpanel');
							//redirect('http://localhost/library/user');
						}
					}
				}
				else
				{
					$data['message'] = "Email and Password is incorrect.";
					$this->load->view('view_login', $data);
				}
			}
		}
		else
		{
			$data['message'] = '';
			$this->load->view('view_login', $data);
		}
	}

	public function reg()
	{	
		
		if($this->input->post('buttonreg'))
		{
			if(!$this->form_validation->run('signup'))
			{
				$data['message'] = validation_errors();
				$this->load->view('view_reg', $data);
			}
			else
			{
			
				$u_name = $this->input->post('uname');
				$u_email=$this->input->post('email');
				$u_gender=$this->input->post('gender');
				$u_pass=$this->input->post('pass');
				$u_cpass=$this->input->post('cpass');
				$u_address=$this->input->post('address');
				$u_phone=$this->input->post('phone');
				
				if($u_pass == $u_cpass){
					$this->load->model('usermodel');
					$this->usermodel->insert($u_name,$u_email,$u_gender,$u_pass,$u_cpass,$u_address,$u_phone);
					$this->load->view('view_login');
				}
				else
				{
					$data['message'] = "Password does not match.";
					$this->load->view('view_reg', $data);
				}
			}
		}
		else
		{
			$data['message'] = '';
			$this->load->view('view_reg', $data);
		}
		
	}
	public function resetpass()
	{	
		
		if($this->input->post('buttonreset'))
		{
			if(!$this->form_validation->run('resetpassword'))
			{
				$data['message'] = validation_errors();
				$this->load->view('view_reset', $data);
			}
			else
			{
				$email= $this->input->post('email');
				$pass= $this->input->post('password');
				$cpass= $this->input->post('cpassword');
				
				if($pass == $cpass){
					$this->load->model('usermodel');
					$this->usermodel->resetpas($email,$pass,$cpass);
					//$this->load->view('view_login');
					redirect('http://localhost/library/home/');
					
				}
				else
				{
					$data['message'] = "Password does not match.";
					$this->load->view('view_reset', $data);
				}
				
				//$this->load->view('view_login');
				
			}
			
		}
		else
		{
			$data['message'] = '';
			$this->load->view('view_reset', $data);
		}
	}
	public function logout()
	{	
		$this->session->unset_userdata('login_names');
		redirect('http://localhost/library');
		
	}
}
?>