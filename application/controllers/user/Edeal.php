<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Edeal extends CI_Controller
{

    /**
     * Edeals controoller to add new deals from
     * admin panel to diplay on the website.
     */

    public function getEdeals()
    {
        $this->load->model('user/EdealModel');
        $response['edeal'] = $this->EdealModel->getEdeals();
        $this->load->view('head.php');
        $this->load->view('header.php');
        $this->load->view('user/edeals.php', $response);
        $this->load->view('footer.php');
    }

    public function submitProductLink()
    {
        $userDataWithLink = json_decode($this->input->get('submitLinkWithData'), TRUE);
        $this->load->model('user/EdealModel');
        $response = $this->EdealModel->submitProductLink($userDataWithLink);
        if ($response['status']) {
            // Load PHPMailer library
            $this->load->library('phpmailer_lib');

            // PHPMailer object
            $mail = $this->phpmailer_lib->load();

            // SMTP configuration
            // $mail->isSMTP();
            // $mail->Host     = 'smtp.example.com';
            // $mail->SMTPAuth = true;
            // $mail->Username = 'user@example.com';
            // $mail->Password = '********';
            // $mail->SMTPSecure = 'ssl';
            // $mail->Port     = 465;

            // SMTP configuration Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = ' infobrandkalp@gmail.com';
            $mail->Password = 'Start@2020';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom(' infobrandkalp@gmail.com', 'BrandKalp');
            //$mail->addReplyTo('info@example.com', 'CodexWorld');

            // Add a recipient
            $mail->addAddress(" infobrandkalp@gmail.com");

            // Add cc or bcc 
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Email subject
            $mail->Subject = 'BrandKalp: Request For Discount';

            // Set email format to HTML
            $mail->isHTML(true);
            // Email body content
            $mailContent = "<h3 style='font-weight:bold'>Email: </h3>" . $userDataWithLink['userEmail'] . "<h3 style='font-weight:bold'>Product Link: </h3>" . $userDataWithLink['productLink'];
            $mail->Body = $mailContent;

            // Send email
            $mail->send();
        } else {
            echo json_encode(array("status" => FALSE, "message" => "Please Try Again !!", "data" => ""));
        }
        echo json_encode($response);
    }

    public function userOrderDetailsSave()
    {
        $orderDetails = $this->input->post();
        $orderDetails['ordered_summary_image'] = $_FILES;
        $this->load->model('user/EdealModel');
        $response = $this->EdealModel->userOrderDetailsSave($orderDetails);
        if ($response) {
            // Load PHPMailer library
            $this->load->library('phpmailer_lib');

            // PHPMailer object
            $mail = $this->phpmailer_lib->load();

            // SMTP configuration
            // $mail->isSMTP();
            // $mail->Host     = 'smtp.example.com';
            // $mail->SMTPAuth = true;
            // $mail->Username = 'user@example.com';
            // $mail->Password = '********';
            // $mail->SMTPSecure = 'ssl';
            // $mail->Port     = 465;

            // SMTP configuration Gmail
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = ' infobrandkalp@gmail.com';
            $mail->Password = 'Start@2020';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom(' infobrandkalp@gmail.com', 'BrandKalp');
            //$mail->addReplyTo('info@example.com', 'CodexWorld');

            // Add a recipient
            $mail->addAddress(" infobrandkalp@gmail.com");

            // Add cc or bcc 
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Email subject
            $mail->Subject = 'BrandKalp: Order Summary';

            // Set email format to HTML
            $mail->isHTML(true);
            // Email body content 
            $mailContent = "<h3 style='font-weight:bold'>UPI Method:</h3>" . $orderDetails['upiID'] . "<h3 style='font-weight:bold'>UPI Method:</h3>" . $orderDetails['upiValue'] . "<h3 style='font-weight:bold'>Order Summary: </h3><img src='E:\xampp\htdocs\brandkalp\assets\images\orders" . $response . "' alt='order summary image' />";
            $mail->Body = $mailContent;

            // Send email
            if ($mail->send()) {
                header("refresh:0.5;url=" . base_url() . "user/edeal/getEdeals");
                echo "<script> alert('Sent successfully. Thank you !!')</script>";
            } else {
                echo "<script> alert('Failed send Mail. Try again !!')</script>";
                header("refresh:0.5;url=" . base_url() . "user/edeal/getEdeals");
            }
        } else {
            echo "<script> alert('Failed send Mail. Try again !!')</script>";
            header("refresh:0.5;url=" . base_url() . "user/edeal/getEdeals");
        }
    }
}
