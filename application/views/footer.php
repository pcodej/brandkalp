<head>
  <style>
    #footer {
      color: #313030;
      font-size: 14px;
      background: #fff;
    }

    #footer .footer-top {
      padding: 60px 0 30px 0;
      background: #fff9f7;
    }

    #footer .footer-top .footer-contact {
      margin-bottom: 30px;
    }

    #footer .footer-top .footer-contact h4 {
      font-size: 22px;
      margin: 0 0 30px 0;
      padding: 2px 0 2px 0;
      line-height: 1;
      font-weight: 700;
    }

    #footer .footer-top .footer-contact p {
      font-size: 14px;
      line-height: 24px;
      margin-bottom: 0;
      font-family: "Raleway", sans-serif;
      color: #656262;
    }

    #footer .footer-top h4 {
      font-size: 16px;
      font-weight: bold;
      color: #313030;
      position: relative;
      padding-bottom: 12px;
    }

    #footer .footer-top .footer-links {
      margin-bottom: 30px;
    }

    #footer .footer-top .footer-links ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    #footer .footer-top .footer-links ul i {
      padding-right: 2px;
      color: #ffa587;
      font-size: 18px;
      line-height: 1;
    }

    #footer .footer-top .footer-links ul li {
      padding: 10px 0;
      display: flex;
      align-items: center;
    }

    #footer .footer-top .footer-links ul li:first-child {
      padding-top: 0;
    }

    #footer .footer-top .footer-links ul a {
      color: #656262;
      transition: 0.3s;
      display: inline-block;
      line-height: 1;
    }

    #footer .footer-top .footer-links ul a:hover {
      text-decoration: none;
      color: #ff5821;
    }

    #footer .footer-newsletter {
      font-size: 15px;
    }

    #footer .footer-newsletter h4 {
      font-size: 16px;
      font-weight: bold;
      color: #313030;
      position: relative;
      padding-bottom: 12px;
    }

    #footer .footer-newsletter form {
      margin-top: 30px;
      background: #fff;
      padding: 6px 10px;
      position: relative;
      border-radius: 50px;
      text-align: left;
      border: 1px solid #ffe2d9;
    }

    #footer .footer-newsletter form input[type="email"] {
      border: 0;
      padding: 4px 8px;
      width: calc(100% - 100px);
    }

    #footer .footer-newsletter form input[type="submit"] {
      position: absolute;
      top: 0;
      right: 0;
      bottom: 0;
      border: 0;
      background: none;
      font-size: 16px;
      padding: 0 20px;
      background: #ff5821;
      color: #fff;
      transition: 0.3s;
      border-radius: 50px;
      box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    }

    #footer .footer-newsletter form input[type="submit"]:hover {
      background: #ed3b00;
    }

    #footer .credits {
      padding-top: 5px;
      font-size: 13px;
      color: #313030;
    }

    #footer .social-links a {
      font-size: 18px;
      display: inline-block;
      background: #ff5821;
      color: #fff;
      line-height: 1;
      padding: 8px 0;
      margin-right: 4px;
      border-radius: 50%;
      text-align: center;
      width: 36px;
      height: 36px;
      transition: 0.3s;
    }

    #footer .social-links a:hover {
      background: #ff7e54;
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Brandkalp</h3>
          <p>
            Sector 52 Noida UP <br>
            India<br>
            <br><br>
            <strong>Phone:</strong> +91 9199-375-197<br>
            <strong>Email:</strong> brandkalp@gmail.com<br>
          </p>
        </div>

        <div class="col-lg-2 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url() ?>user/About/aboutUs">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url() ?>user/services/servicePageView">Services</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url() ?>user/edeal/getEdeals">E-deals</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url() ?>user/services/servicePageView">Marketing Consultation</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url() ?>user/services/servicePageView">E-Commerce Solution</a></li>

            <li><i class="bx bx-chevron-right"></i> <a href="<?php echo base_url() ?>user/services/servicePageView">Digital Marketing</a></li>
          </ul>
        </div>
        <div class="col-lg-4 col-md-6 footer-newsletter">
          <h4>Contact Us</h4>
          <p>Get In Touch</p>
          <form action="" method="post">
            <a href="<?php echo base_url() ?>user/contact/contactPage"><input type="email" name="email"><input type="submit" value="Become a Client"></a>
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container d-lg-flex py-4">

    <div class="mr-lg-auto text-center text-lg-left">
      <div class="copyright">
        © Copyright 2020 <strong><span>Brandkalp</span></strong>. All Rights Reserved.
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexor-free-multipurpose-bootstrap-template/ -->

      </div>
    </div>
    <!-- <div class="social-links text-center text-lg-right pt-3 pt-lg-0">
        <a href="https://www.facebook.com/Brandkalp" target="_blank" class="facebook"><img id="youtube" src="../../assets/images/fb.png"></a>
        <a href="https://www.instagram.com/brandkalp/" target="_blank" class="instagram"><img id="insta" src="../../assets/images/insta.png"></a>
   
      </div> -->
  </div>
</footer>