<!DOCTYPE html>
<html lang="en">

<head>
    <link href="../../assets/css/home_style.css" rel="stylesheet">
</head>

<body>
    <!--- Fixed background -->

    <!-- <div class="container-fluid">
    <div class="row home-page">
        <img src="../../assets/images/BrandKalp_Try.jpg" class="bk-img" alt="BrandKalp_Background_image">
        <div class="col-lg-6 col-md-12 col-sm-12 section-left">
            <div class="col-lg-12"><h1 id="head-title">Your Need Our Solution.</h1></div>
            <div class="col-lg-12"><p id="head-para">Transforming Business with strategic thinking and Marketing expertise to deliver accelerated outcome.<br>
            Grow your Product into a Brand with our Result oriented Consultation.</p></div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 section-right">
            <div class="col-lg-12"><h4 id="head-title-right">Check the best online deals on our <a href="/user/edeal/getEdeals" style="color:#49e3ff;">E-Deals</a> page and save more.</h4></div>
            <div class="col-lg-12"><p id="head-para-right">We are associated with E-commerce Giants with E-connect.</p></div>
        </div>
        <div class="col-lg-12 btn-section"><a href="/user/contact/contactPage"><button class="btn btn-lg btn-success" id="becomeClient">Become a Client</button></div>
    </div>
</div> -->

    <div class="container-fluid">
        <div class="row home-page">
            <img src="../../assets/images/bg1.jpg" class="bk-img" alt="BrandKalp_Background_image">
            <div class="col-lg-12 col-md-12 col-sm-12 content-holder">
                <h1 id="head-title">Your Need Our Solution.</h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 content-holder" id="head-subtitle-div">
                <h4 id="head-title-right">Check the best online deals on our <a href="<?php echo base_url() ?>/user/edeal/getEdeals" style="color:#49e3ff;">E-Deals</a> page and save more.</h4>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 content-holder" id="head-para-div">
                <p id="head-para">Transforming Business with strategic thinking and Marketing expertise to deliver accelerated outcome.<br>
                    Grow your Product into a Brand with our Result oriented Consultation.</p>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 btn-section content-holder"><a href="<?php echo base_url() ?>user/contact/contactPage"><button class="btn btn-lg" id="becomeClient">Become a Client</button></a></div>
            <div class="col-lg-12 col-md-12 col-sm-12 content-holder" id="head-bottom-line-div">
                <p id="head-para-right">We are associated with E-commerce Giants via E-connect.</p>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {

        $("#becomeClient").hover(function() {
            $('#becomeClient').addClass('animate__animated animate__rubberBand');
        });

    });
</script>

</html>