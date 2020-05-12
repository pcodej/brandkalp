<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Edeal extends CI_Controller {

        /**
         * Edeals controoller to add new deals from
         * admin panel to diplay on the website.
         */
        public function edealView(){
            //echo json_encode($this->input->post());
            $this->load->view('head.php');
            $this->load->view('admin/edeals.php');
        }

        public function edealSave(){
            $edealDataToSave = json_decode($this->input->get('submitedData'), TRUE);
            $this->load->model('admin/EdealModel');
            $responseAfterSave = $this->EdealModel->edealSave($edealDataToSave);
            echo json_encode($responseAfterSave);
        }
        public function getEdeals(){
            $this->load->model('admin/EdealModel');
            $allEdeals = $this->EdealModel->getEdeals();
            echo json_encode($allEdeals);
        }
    }