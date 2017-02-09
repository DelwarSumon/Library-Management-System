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
		//file_upload_start
			if($this->upload($_FILES['image']))
			{
				$errors= array();
				  $file_name = $_FILES['image']['name'];
				  $file_size =$_FILES['image']['size'];
				  $file_tmp =$_FILES['image']['tmp_name'];
				  $file_type=$_FILES['image']['type'];
				  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
				  
				  $expensions= array("jpeg","jpg","png");
				  
				  if(in_array($file_ext,$expensions)=== false){
					 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
				  }
				  
				  if($file_size > 2097152){
					 $errors[]='File size must be excately 2 MB';
				  }
				  
				  if(empty($errors)==true){
					 move_uploaded_file($file_tmp,"images/".$file_name);
					 echo "Success";
				  }else{
					 print_r($errors);
				  }

				
				
				
				  
				  /*
				$errors= array();
				  $file_name = $_FILES['image']['name'];
				  $file_size =$_FILES['image']['size'];
				  $file_tmp =$_FILES['image']['tmp_name'];
				  $file_type=$_FILES['image']['type'];
				  $arr=explode('.',$_FILES['image']['name']);
				  $file_ext=strtolower(end($arr));
				  
				  
				  $expensions= array("jpeg","jpg","png");
				  
				  if(in_array($file_ext,$expensions)=== false){
					 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
				  }
				  
				  if($file_size > 2097152){
					 $errors[]='File size must be < 2 MB';
				  }
				  
				  if(empty($errors)==true){
					 move_uploaded_file($file_tmp,"cover/".$file_name);
					 //echo "Success";
				  }else{
					 print_r($errors);
				  }*/
			}
			/*$bookcode=$_POST['bookcode'];
			$year=$_POST['year'];
			$cover="Cover/".$_FILES['image']['name'];*/
			
				$b_name = $this->input->post('bname');
				$b_code=$this->input->post('bookcode');
				$b_year=$this->input->post('year');
				$b_image="Cover/".$_FILES['image']['name'];;
				
				
				$this->load->model('bookmodel');
				$this->bookmodel->insert($b_name,$b_code,$b_year,$b_image);
				//$this->load->view('view_adminpanel');
				redirect('http://localhost/library/admin/');
				
			//}
		}
		else
		{
			$data['message'] = "";
			$this->load->view('view_addbook', $data);
		}
	
	}
	
}	