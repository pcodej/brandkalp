<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EdealModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }
    public function edealSave($edealDataToSave)
    {
        try {
            $array_to_save_data = array('title' => $edealDataToSave['title'], 'link' => $edealDataToSave['link'], 'actual_price' => $edealDataToSave['mrpActual'], 'offer_price' => $edealDataToSave['mrpOffer'], 'offer_percent' => $edealDataToSave['precentDiscount']);
            if(isset($edealDataToSave['edealID']) && $edealDataToSave['edealID']!=""){
                $this->db->update('edeals', $array_to_save_data, array('id'=>$edealDataToSave['edealID']));
                $edeal_id = $edealDataToSave['edealID'];
            }else{
                $this->db->insert('edeals', $array_to_save_data);
                $edeal_id = $this->db->insert_id();
            }
            
            if ($this->db->affected_rows() > 0 || (isset($edealDataToSave['edealID']) && $edealDataToSave['edealID']!="")) {                
                if ($edealDataToSave['prod_image_data']['productImg']['name'] != "") {
                    $extention = explode('.', $edealDataToSave['prod_image_data']['productImg']['name']);
                    $edealDataToSave['prod_image_data']['productImg']['name'] = "item_img_" . $edeal_id . "." . $extention[1];
                    $image_name = $edealDataToSave['prod_image_data']['productImg']['name'];
                    $destination_path = getcwd() . DIRECTORY_SEPARATOR;
                    $target_path = $destination_path . "assets/images/edeal_products/" . basename($image_name);
                    if(file_exists($target_path)){
                        unlink($target_path);
                    }
                    move_uploaded_file($edealDataToSave['prod_image_data']['productImg']['tmp_name'], $target_path);
                    $this->db->update('edeals', array('image' => $edealDataToSave['prod_image_data']['productImg']['name']), array('id' => $edeal_id));
                }
                $response = array("status" => TRUE, "message" => "Data Added Successfully !!");
            } else {
                $response = array("status" => FALSE, "message" => "Failed To Add Data.");
            }
            return $response;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function getEdeals($edealId)
    {
        try {
            if($edealId != ""){
                $this->db->where('id',$edealId);
            }
            $allEdeals = $this->db->get('edeals');
            return $allEdeals->result_array();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function get_user_provided_product_link()
    {
        try {
            $all_links_with_users = $this->db->get('user_product_links');
            return $all_links_with_users->result();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function update_user_link_discount_status($userLinkId)
    {
        try {
            $this->db->update('user_product_links', array("status" => 1), array("id" => $userLinkId));
            if ($this->db->affected_rows() == 1) {
                return array("status" => TRUE, "message" => "");
            }
            return array("status" => FALSE, "message" => "");
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
    public function delete_edeal($edeal_id)
    {
        $this->db->delete("edeals", array("id" => $edeal_id));
        if ($this->db->affected_rows() > 0) {

            return array("status" => TRUE, "message" => "Deleted Successfully !!");
        }
        return array("status" => FALSE, "message" => "Failed to Delete");
    }
}
