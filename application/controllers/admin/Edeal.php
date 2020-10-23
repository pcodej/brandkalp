<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edeal extends CI_Controller
{

    /**
     * Edeals controoller to add new deals from
     * admin panel to diplay on the website.
     */
    public $arr_session;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library("session");
        $this->arr_session = $this->session->userdata('arr_session');
    }
    public function edealView()
    {
        if (isset($this->arr_session['userId'])) {
            //echo json_encode($this->input->post());
            $this->load->view('head.php');
            $this->load->view('admin/edeals.php');
        } else {
            redirect('admin/login/loginView', 'refresh');
        }
    }

    public function edealSave()
    {
        $edealDataToSave = $this->input->post();        
        $edealDataToSave["prod_image_data"] = $_FILES;
        $this->load->model('admin/EdealModel');
        $responseAfterSave = $this->EdealModel->edealSave($edealDataToSave);
        if ($responseAfterSave['status']) {
            header("refresh:0.5;url=" . base_url() . "admin/edeal/edealView");
            echo "<script> alert('Saved successfully !!')</script>";
        } else {
            echo "<script> alert('Failed to save. Try again !!')</script>";
            header("refresh:0.5;url=" . base_url() . "admin/edeal/edealView");
        }
    }
    public function getEdeals()
    {
        if($this->input->get('edeal_id') != null){
            $edealId = $this->input->get('edeal_id');
        }else{
            $edealId = "";
        }
        $this->load->model('admin/EdealModel');
        $allEdeals = $this->EdealModel->getEdeals($edealId);
        echo json_encode($allEdeals);
    }
    public function list_product_links()
    {
        if (isset($this->arr_session['userId'])) {
            $this->load->view('head.php');
            $this->load->view('admin/edealUserLinks.php');
        } else {
            redirect('admin/login/loginView', 'refresh');
        }
    }
    public function get_user_provided_product_link()
    {
        $this->load->model('admin/EdealModel');
        $product_link_data = $this->EdealModel->get_user_provided_product_link();
        echo json_encode($product_link_data);
    }
    public function update_user_link_discount_status()
    {
        $userLinkId = $this->input->get('userLinkId');
        $this->load->model('admin/EdealModel');
        $status = $this->EdealModel->update_user_link_discount_status($userLinkId);
        echo json_encode($status);
    }
    public function delete_edeal()
    {
        $edeal_id = $this->input->get("edeal_id");
        $this->load->model('admin/EdealModel');
        $status = $this->EdealModel->delete_edeal($edeal_id);
        echo json_encode($status);
    }
}
