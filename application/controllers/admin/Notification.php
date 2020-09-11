<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Notification extends CI_Controller
{
    public $arr_session;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library("session");
        $this->arr_session = $this->session->userdata('arr_session');
    }
    public function add_notification()
    {
        if (isset($this->arr_session['userId'])) {
            $this->load->view('head.php');
            $this->load->view('admin/notifications.php');
        } else {
            redirect('admin/login/loginView', 'refresh');
        }
    }

    public function notificationSave()
    {
        $notification_data = $this->input->post();
        $this->load->model('admin/NotificationModel');
        $response['data'] = $this->NotificationModel->notificationSave($notification_data);
        redirect('admin/notification/add_notification', 'refresh');
    }

    public function getNotifications()
    {
        $this->load->model('admin/NotificationModel');
        $allnotifications = $this->NotificationModel->getNotifications();
        echo json_encode($allnotifications);
    }

    public function delete_notification()
    {
        $noti_id = $this->input->get("noti_id");
        $this->load->model('admin/NotificationModel');
        $status = $this->NotificationModel->delete_notification($noti_id);
        echo json_encode($status);
    }
}
