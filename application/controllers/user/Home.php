<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Home extends CI_Controller {
      
        public function homePage(){           
            $this->load->view('head.php');
            $this->load->view('header.php');
            $this->load->view('user/home.php');
            $this->load->view('footer.php');
        }
    }