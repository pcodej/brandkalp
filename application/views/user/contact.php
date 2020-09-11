<head>
    <style>
        #addrSection {
            padding-left: 100px;
            padding-top: 100px;
        }

        #speImgSection {
            padding-top: 100px;
            padding-left: 150px;
            width: 20%;
            margin-left: 30px;
            display: block;
        }

        #contactFormSection {
            padding-top: 100px;
        }

        #contact-us-form span {
            margin-top: 10px;
            font-size: 40px;
            text-align: center;
        }

        .form-group label {
            margin-top: 10px;
        }

        .form-group input[type='text'] {
            height: 50px;
            margin-top: 10px;
        }

        #registerUser {
            margin-top: 20px;
            width: 100%;
        }

        #addrSection h2 {
            margin-top: 10px;
            font-size: 40px;
            text-align: center;
        }

        #addrSection label {
            margin-top: 10px;
        }

        #fbImg,
        #instaImg,
        #twitImg,
        #linkdImg,
        #youtube {
            width: 40px;
            height: 100%;
        }

        .form-group input[type='text']:hover {
            border-color: green;
            border-width: 2px;
        }

        .form-group textarea:hover {
            border-color: green;
            border-width: 2px;
        }

        #success-msg {
            display: none;
            width: 100%;
            color: green;
            height: 30px;
            line-height: 2;
            text-align: center;
        }

        @media only screen and (min-width:1200px) {
            #speImgSection {
                display: block;
            }
        }

        @media only screen and (max-width:1200px) {
            #speImgSection {
                display: none;
            }

            #addrSection {
                padding-left: 0px;
                padding-top: 100px;
            }
        }

        @media only screen and (max-width:768px) {

            #fbImg,
            #instaImg,
            #twitImg,
            #linkdImg,
            #youtube {
                /* width: 20%; */
                height: 20%;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12" id="addrSection">
                <h2>Contact Info:</h2>
                <label for="">Address:</label>
                <p>Sector 52 Noida UP
                    <br>Contact no. : +91 9199-375-197 [ Also Connect On Whatsup Here ]
                </p>
                <label for="">Get In Touch On:</label>
                <div class="row" id="socialImgSec">
                    <div class="col-lg-2 col-md-2 col-sm-2"><a href=" https://www.facebook.com/Brandkalp/" target="_blank"><img id="fbImg" src="../../assets/images/fb.png"></a></div>
                    <div class="col-lg-2 col-md-2 col-sm-2"><a href=" https://www.instagram.com/brandkalp/" target="_blank"><img id="instaImg" src="../../assets/images/insta.png"></a></div>
                    <div class="col-lg-2 col-md-2 col-sm-2"><a href="https://twitter.com/brandkalp?s=09" target="_blank"><img id="twitImg" src="../../assets/images/twitter.jpg"></a></div>
                    <div class="col-lg-2 col-md-2 col-sm-2"><a href=" https://www.linkedin.com/company/brandkalp/?viewAsMember=true" target="_blank"><img id="linkdImg" src="../../assets/images/linkedin.PNG"></a></div>
                    <div class="col-lg-2 col-md-2 col-sm-2"><a href="https://www.youtube.com/channel/UCG4faiKAt1mRTm_tvaJ3_SQ" target="_blank"><img id="youtube" src="../../assets/images/youtube.png"></a></div>
                </div>
            </div>
            <div class="col-lg-4" id="speImgSection"><img src="../../assets/images/separation-line.png"></div>
            <div class="col-lg-4 col-md-6 col-sm-12" id="contactFormSection">
                <span id="success-msg"></span>
                <form action="" id="contact-us-form">
                    <span>Contact Us</span>
                    <div class="form-group" id="">
                        <label for="contactName">Name:<sup style="color: red;">*</sup></label>
                        <input type="text" id="contactName" name="contactName" class="form-control" required>
                        <label for="contactEmail">Email:<sup style="color: red;">*</sup></label>
                        <input type="text" id="contactEmail" name="contactEmail" class="form-control" required>
                        <label for="contactNo">Contact Number:</label>
                        <input type="text" id="contactNo" name="contactNo" class="form-control" required>
                        <label for="message">Message:<sup style="color: red;">*</sup></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Enter your query here" required></textarea>
                        <input type="button" id="registerUser" class="btn btn-success btn-lg" value="Get In Touch">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="<?php echo base_url() ?>assets/js/custom/contact.js"></script>