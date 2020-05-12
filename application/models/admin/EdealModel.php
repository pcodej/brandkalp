<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EdealModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }
    public function edealSave($edealDataToSave)
    {
        try {
            $array_to_save_data = array('title' => $edealDataToSave['title'], 'description' => $edealDataToSave['description'], 'link' => $edealDataToSave['link']);
            $this->db->insert('edeals', $array_to_save_data);
            if ($this->db->affected_rows() > 0) {
                $response = array("status" => TRUE, "message" => "Data Added Successfully !!");
            } else {
                $response = array("status" => FALSE, "message" => "Failed To Add Data.");
            }
            return $response;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function getEdeals()
    {
        try {
            $allEdeals = $this->db->get('edeals');
            return $allEdeals->result_array();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
