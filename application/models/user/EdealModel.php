<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EdealModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
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
