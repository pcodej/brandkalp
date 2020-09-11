<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    
    public function aboutUs(){
        $this->load->view("head.php");
        $this->load->view('header.php');
        $this->load->view("user/about_us.php");
        $this->load->view('footer.php');
    }
}