<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Login controller for admin login
	 * and related authentication functionalities
	 */
	public function loginView()
	{
		$this->load->view('head.php');
		$this->load->view('admin/login.php');
	}
	public function loginData(){
		$loginFormData = $this->input->post();
		$this->load->model('admin/LoginModel');
		$response = $this->LoginModel->loginData($loginFormData);
		if($response['status']){
			$this->load->view('head.php');
			$this->load->view('admin/edeals.php');
		}else{
			$this->loginView();
		}		
	}
}
