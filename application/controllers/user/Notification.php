<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller {

	public function view_notifications()
	{
		$this->load->view('head.php');
		$this->load->view('header.php');
		$this->load->view('user/notifications.php');
	}
	public function get_notifications(){
		$this->load->model("user/NotificationModel");
		$response["notification_data"] = $this->NotificationModel->get_notifications();
		echo json_encode($response);
	}
}
