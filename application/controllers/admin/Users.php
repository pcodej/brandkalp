<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{

    public $arr_session;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library("session");
        $this->arr_session = $this->session->userdata('arr_session');
    }
    public function list_users()
    {
        if (isset($this->arr_session['userId'])) {
            $this->load->view('head.php');
            $this->load->view('admin/users.php');
        } else {
            redirect('admin/login/loginView', 'refresh');
        }
    }
    public function get_users()
    {
        $this->load->model('admin/UserModel');
        $users_data = $this->UserModel->get_users();
        echo json_encode($users_data);
    }
}
