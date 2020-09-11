<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }

    public function addUserContactDetails($userDetails)
    {
        try {
            if ($userDetails['name'] == "" || $userDetails['emailId'] == "" || $userDetails['message'] == "") {
                return array("status" => FALSE, "message" => "Enter Valid data. Try again.");
            }
            $array_to_save_data = array('name' => $userDetails['name'], 'email' => $userDetails['emailId'], 'phone' => $userDetails['phone'], 'message' => $userDetails['message']);
            $this->db->insert('users', $array_to_save_data);
            if ($this->db->affected_rows() > 0) {
                $response = array("status" => TRUE, "message" => "Registered Successfully !!");
            } else {
                $response = array("status" => FALSE, "message" => "Try Again !!");
            }
            return $response;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
