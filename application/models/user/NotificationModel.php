<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotificationModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

    public function get_notifications()
    {
        $this->db->order_by('id', 'DESC');
        $result = $this->db->get('notifications');
        return $result->result_array();
    }
}
