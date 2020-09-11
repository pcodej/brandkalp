<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        $this->load->library("session");
    }
    public function loginData($loginFormData)
    {
        if (isset($loginFormData['username'])) {
            $result = $this->db->get_where('admin_login', array('username' => $loginFormData['username'], 'password' => $loginFormData['password']), 1);
            if ($result->num_rows() === 1) {
                $this->session->set_userdata('arr_session', array("userId" => $loginFormData['username']));
                $response = array("status" => TRUE, "message" => "");
            } else {
                $response = array("status" => FALSE, "message" => "");
            }
            return $response;
        } else {
            return FALSE;
        }
    }
}
