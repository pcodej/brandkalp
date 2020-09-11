<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EdealModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

    public function getEdeals()
    {
        try {
            $this->db->order_by('id', 'DESC');
            $allEdeals = $this->db->get('edeals');
            return $allEdeals->result_array();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function submitProductLink($userDataWithLink)
    {
        try {
            $result = $this->db->get_where('user_product_links', array('email' => $userDataWithLink['userEmail'], 'link' => $userDataWithLink['productLink']), 1);
            if ($result->num_rows() > 0) {
                return array("status" => FALSE, "message" => "You already submitted this link before", "data" => "");
            }
            $array_to_insert = array('email' => $userDataWithLink['userEmail'], 'link' => $userDataWithLink['productLink']);
            $this->db->insert("user_product_links", $array_to_insert);
            if ($this->db->affected_rows() > 0) {
                return array("status" => TRUE, "message" => "Link Submitted Successfully !!", "data" => "");
            } else {
                return array("status" => FALSE, "message" => "Failed To Submit. Try again", "data" => "");
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function userOrderDetailsSave($orderDetails)
    {

        if ($orderDetails['ordered_summary_image']['orderReceiptSs']['name'] != "") {
            $extention = explode('.', $orderDetails['ordered_summary_image']['orderReceiptSs']['name']);
            $image_name_special = $orderDetails['upiID'] . "_" . date("Y-m-d H:i:s");
            $image_name_special = preg_replace('/[^A-Za-z0-9\-]/', '-', $image_name_special);
            $orderDetails['ordered_summary_image']['orderReceiptSs']['name'] = "order_from" . $image_name_special . "." . $extention[1];
            $image_name = $orderDetails['ordered_summary_image']['orderReceiptSs']['name'];
            $destination_path = getcwd() . DIRECTORY_SEPARATOR;
            $target_path = $destination_path . "assets/images/orders/" . basename($image_name);
            if (move_uploaded_file($orderDetails['ordered_summary_image']['orderReceiptSs']['tmp_name'], $target_path)) {
                return $image_name;
            }
            return FALSE;
        }
        return FALSE;
    }
}
