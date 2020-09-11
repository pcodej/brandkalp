<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        body {
            font-family: "Montserrat", sans-serif;
        }

        .serviceDiv {
            height: 450px;
            box-shadow: 5px 10px 18px #f5c47f;
            padding: 50px;
            transition: transform .5s;
            /* Animation */
            margin-top: 50px;
            word-spacing: 4px;
            text-align: center;
        }

        .serviceDiv:hover {
            background-color: #f8b24f;
        }

        span {
            font-weight: 800;
            font-size: 20px;
        }

        #becomeClient {
            bottom: 25px;
            right: 25px;
            background-color: #57d0f9;
            opacity: 0.9;
            color: black;
            border: solid;
            border-width: 4px;
            border-color: white;
            width: 250px;
            margin-left: 40%;
            margin-top: 20px;
        }

        #pageTitle h1 {
            text-align: center;
            line-height: 2;

        }

        #pageTitle {
            height: 150px;
        }

        @media only screen and (max-width: 1000px) {
            #pageTitle i {
                display: none;
            }
        }

        @media only screen and (max-width: 1200px) {
            .serviceDiv {
                height: 650px;
            }
        }
    </style>
</head>

<div class="container-fluid">
    <div class="col-md-12" id="pageTitle">
        <i class="material-icons col-md-1" style="font-size:80px;color:#bb596b;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#bb596b;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#ff9a76;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#ff9a76;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#ff9a76;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#ff9a76;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#ff9a76;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#ff9a76;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#ff9a76;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#ff9a76;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#f8b24f;">wb_incandescent</i>
        <i class="material-icons col-md-1" style="font-size:80px;color:#f8b24f;">wb_incandescent</i>
        <h1>Our Services</h1>
    </div>
    <div class="col-md-3 serviceDiv">
        <span>Marketing Consultation</span>
        <p>Our Marketing & Sales experts offer real-world experience and extensive knowledge in disciplines from pricing to branding to digital marketing. We help our clients set their strategic direction, develop their marketing and sales capabilities, and connect their organization to realize the full potential of today's omni-channel.</p>
    </div>
    <div class="col-md-3 serviceDiv">
        <span>Digital Marketing</span>
        <p>We work very closely with you in order to define a digital marketing strategy to suit your business requirements. We implement digital marketing campaigns with established, mature & proven strategies thereby ensuring your website gains online visibility enough to meet business objectives.</p>
    </div>
    <div class="col-md-3 serviceDiv">
        <span>E-Commerce</span>
        <p>We are associated with E-Commerce giants via various routes like E-connect, affiliate, and Seller Program. We are rapidly looking to increase our horizons to work in different sectors of E-Commerce.</p>
    </div>
    <div class="col-md-3 serviceDiv">
        <span>Market Research</span>
        <p>Market research in India is something that is rapidly changing and evolving every second. Brandkalp offers unmatched customized research services and various market analysis techniques, which provide brands with an incredible overview of their product and market. We help brands to keep a track of changing demands, performance, and other such factors through multiple research techniques.</p>
    </div>
    <a href="<?php echo base_url() ?>/user/contact/contactPage"><button class="btn btn-success btn-lg" id="becomeClient">Become a Client</button></a>
</div>