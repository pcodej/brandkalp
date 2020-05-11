<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {
    
    public function servicePageView(){
        $this->load->view("head.php");
        $this->load->view("user/services.php");
    }
}