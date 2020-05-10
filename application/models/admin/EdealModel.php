<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EdealModel extends CI_Model {
    function __construct()
	{
		$this->load->database();
    }
    public function edealSave($edealDataToSave){
        $array_to_save_data = array('title'=>$edealDataToSave['title'],'description'=>$edealDataToSave['description'],'link'=>$edealDataToSave['link']);
        $this->db->insert('edeals',$array_to_save_data);
        if($this->db->affected_rows() > 0){
            $response = array("status"=>TRUE,"message"=>"Data Added Successfully !!");
        }else{
            $response = array("status"=>FALSE,"message"=>"Failed To Add Data.");
        }
        return $response;
    }
}