<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .small-screen-nav {
            margin-bottom: 0px;
            border-radius: 0px;
        }

        .big-screen-nav {
            margin-bottom: 0px;
            border-radius: 0px;
        }

        #logoImg {
            width: 100%;
            height: 80%;
            display: block;
        }

        .navbar-right {
            padding-top: 15px;
        }

        @media only screen and (max-width: 768px) {
            #logoImg {
                width: 50%;
                height: 100%;
            }

            .small-screen-nav {
                display: block;
            }

            .big-screen-nav {
                display: none;
            }
        }

        @media only screen and (min-width: 768px) {
            .small-screen-nav {
                display: none;
                margin-bottom: 0px;
                border-radius: 0px;
            }

            .big-screen-nav {
                display: block;
                margin-bottom: 0px;
                border-radius: 0px;
            }

            #logoImg {
                width: 100%;
                height: 80%;
                display: block;
            }

            .navbar-right {
                padding-top: 15px;
            }
        }

        .notification-count {
            position: absolute;
            left: 10px;
            top: 0;
            background: #b07e20;
            padding: 2px;
            border-radius: 50%;
            font-size: 12px;
            height: 22px;
            width: 22px;
            color: #fff;
            text-align: center;
            font-weight: 600;
        }

        #nav-notify a {
            margin-right: 50px;
            padding-top: 0px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default big-screen-nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="<?php echo base_url() ?>user/home/homePage"><img src="../../assets/images/B_Logo1.png" alt="BrandKalp Logo" id="logoImg"></a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li id="nav-notify"><a href="<?php echo base_url() ?>user/notification/view_notifications"><img src="https://img.icons8.com/bubbles/50/000000/appointment-reminders.png" id="bell-icon" /><span data-toggle="modal" data-target="#notification-list" class="notification-count"></span></a></li>
                <li id="nav-home"><a href="<?php echo base_url() ?>user/home/homePage">Home</a></li>
                <li id="nav-services"><a href="<?php echo base_url() ?>user/services/servicePageView">Services</a></li>
                <li id="nav-edeal"><a href="<?php echo base_url() ?>user/edeal/getEdeals">E-Deals</a></li>
                <li id="nav-About"><a href="<?php echo base_url() ?>user/About/aboutUs">About</a></li>
                <li id="nav-contact"><a href="<?php echo base_url() ?>user/contact/contactPage">Contact US</a></li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-default small-screen-nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url() ?>user/home/homePage"><img src="../../assets/images/B_Logo1.png" alt="BrandKalp Logo" id="logoImg"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li id="nav-notify"><a href=""><img src="https://img.icons8.com/bubbles/50/000000/appointment-reminders.png" id="bell-icon" /><span class="notification-count"></span></a></li>
                    <li id="nav-home"><a href="<?php echo base_url() ?>user/home/homePage">Home</a></li>
                    <li id="nav-services"><a href="<?php echo base_url() ?>user/services/servicePageView">Services</a></li>
                    <li id="nav-edeal"><a href="<?php echo base_url() ?>user/edeal/getEdeals">E-Deals</a></li>
                    <li id="nav-About"><a href="<?php echo base_url() ?>user/About/aboutUs">About</a></li>
                    <li id="nav-contact"><a href="<?php echo base_url() ?>user/contact/contactPage">Contact US</a></li>
                </ul>
            </div>
        </div>
    </nav>

</body>
<script type="text/javascript">
    var urlString = window.location.pathname;
    var activePage = urlString.split('/');
    $("#nav-" + activePage[3]).addClass("active");

    $.getJSON("../../user/notification/get_notifications", {}, function(response) {
        $(".notification-count").text(response['notification_data'].length);
    });
</script>