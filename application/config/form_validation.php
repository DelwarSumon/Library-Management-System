<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array (
	
	'signin' => array (
		array(
		        'field' => 'email',
		        'label' => 'Email',
		        'rules' => 'required|'
		     ),
		array(
		        'field' => 'password',
		        'label' => 'Password',
		        'rules' => 'required|'
		     )
			 ),
	'signup' => array (
		array(
		        'field' => 'uname',
		        'label' => 'UserName',
		        'rules' => 'required|'
		     ),
		array(
		        'field' => 'email',
		        'label' => 'Email',
		        'rules' => 'required|'
		     ),
		array(
		        'field' => 'gender',
		        'label' => 'Gender',
		        'rules' => 'required|'
		     ),
		array(
		        'field' => 'pass',
		        'label' => 'Password',
		        'rules' => 'required|'
		    ),
		array(
		        'field' => 'cpass',
		        'label' => 'ConfirmPassword',
		        'rules' => 'required|'
		     ),
		array(
		        'field' => 'address',
		        'label' => 'Address',
		        'rules' => 'required|'
		     ),
		array(
			'field' => 'phone',
			'label' => 'Phone',
			'rules' => 'required|'
			)
			),
	'resetpassword' => array (
		array(
		        'field' => 'email',
		        'label' => 'Email',
		        'rules' => 'required|'
		     ),
		array(
		        'field' => 'password',
		        'label' => 'Password',
		        'rules' => 'required|'
		    ),
		array(
		        'field' => 'cpassword',
		        'label' => 'ConfirmPassword',
		        'rules' => 'required|'
		     )
			 ),
);
