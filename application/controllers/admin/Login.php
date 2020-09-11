<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	/**
	 * Login controller for admin login
	 * and related authentication functionalities
	 */
	public $arr_session;
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library("session");
		$this->arr_session = $this->session->userdata('arr_session');
	}
	public function loginView()
	{
		if (!isset($this->arr_session['userId'])) {
			$this->load->view('head.php');
			$this->load->view('admin/login.php');
		} else {
			redirect("admin/edeal/edealView");
		}
	}
	public function loginData()
	{
		$loginFormData = $this->input->post();
		$this->load->model('admin/LoginModel');
		$response = $this->LoginModel->loginData($loginFormData);
		if ($response['status']) {
			if (isset($this->arr_session['userId']) != "") {
				redirect("admin/edeal/edealView");
			}
		} else {
			$this->loginView();
		}
	}

	public function logout_user()
	{
		$this->session->unset_userdata('arr_session');
		if (!$this->session->userdata('arr_session')) {
			$status = TRUE;
			session_destroy();
		} else {
			$status = FALSE;
		}
		echo $status;
	}
}
