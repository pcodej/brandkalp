<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Edeal extends CI_Controller {

        /**
         * Edeals controoller to add new deals from
         * admin panel to diplay on the website.
         */
        
        public function getEdeals(){
            $this->load->model('user/EdealModel');
            $response['edeal'] = $this->EdealModel->getEdeals();
            $this->load->view('head.php');
            $this->load->view('user/edeals.php',$response);
        }
    }