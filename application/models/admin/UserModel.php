<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function get_users()
    {
        $users_data = $this->db->get('users');
        if ($users_data->num_rows() > 0) {
            return $users_data->result();
        } else {
            return array();
        }
    }
}
