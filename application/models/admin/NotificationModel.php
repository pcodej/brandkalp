<?php
defined('BASEPATH') or exit('No direct script access allowed');

class NotificationModel extends CI_Model
{
    function __construct()
    {
        $this->load->database();
        $this->load->helper('url');
    }

    public function notificationSave($notification_data)
    {
        $arr_insert = array("title" => $notification_data['title'], "description" => $notification_data['description'], "type" => $notification_data['notifyPriority']);
        $this->db->insert('notifications', $arr_insert);
        if ($this->db->affected_rows() > 0) {
            return array("status" => TRUE, "message" => "Notification Added Successfully !!");
        }
        return array("status" => FALSE, "message" => "Failed to Add Notification. Try Again.");
    }

    public function getNotifications()
    {
        try {
            $allnotification = $this->db->get('notifications');
            return $allnotification->result_array();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete_notification($noti_id)
    {
        $this->db->delete("notifications", array("id" => $noti_id));
        if ($this->db->affected_rows() > 0) {

            return array("status" => TRUE, "message" => "Deleted Successfully !!");
        }
        return array("status" => FALSE, "message" => "Failed to Delete");
    }
}
