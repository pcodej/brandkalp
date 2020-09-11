<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{

    public function contactPage()
    {
        $this->load->view('head.php');
        $this->load->view('header.php');
        $this->load->view('user/contact.php');
        $this->load->view('footer.php');
    }

    public function addUserContactDetails()
    {
        $userDetails = json_decode($this->input->get('submitedData'), TRUE);
        $this->load->model('user/ContactModel');
        $responseAfterSave = $this->ContactModel->addUserContactDetails($userDetails);
        if ($responseAfterSave['status']) {
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
            $mail->Username = 'infobrandkalp@gmail.com';
            $mail->Password = '@Apoorv1';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            $mail->setFrom('infobrandkalp@gmail.com', 'BrandKalp');
            //$mail->addReplyTo('info@example.com', 'CodexWorld');

            // Add a recipient
            $mail->addAddress("infobrandkalp@gmail.com"); //admin who receives mail

            // Add cc or bcc 
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');

            // Email subject
            $mail->Subject = 'BrandKalp: Enquiry Details';

            // Set email format to HTML
            $mail->isHTML(true);
            // Email body content
            $mailContent = "
                <h3 style='font-weight:bold'>Name: </h3>" . $userDetails['name'] . "<br/>
                <h3 style='font-weight:bold'>Email: </h3>" . $userDetails['emailId'] . "<br/>
                <h3 style='font-weight:bold'>Message: </h3>" . $userDetails['message'];
            $mail->Body = $mailContent;

            // Send email
            $mail->send();
        } else {
            echo json_encode(array("status" => FALSE, "message" => "Please Try Again !!", "data" => ""));
        }
        echo json_encode($responseAfterSave);
    }
}
