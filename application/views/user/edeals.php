<?php
defined('BASEPATH') or exit('No direct script access allowed');
$this->load->helper('url');
?>
<style>
  body {
    font-family: "Montserrat", sans-serif;
  }

  span {
    font-weight: 800;
    font-size: 20px;
    color: black;
  }

  #listTitleDiv {
    margin-top: 250px;
  }

  .instruction-box {
    /* text-align: center; */
    box-shadow: 5px 10px 18px #888888;
    height: 200px;
    border-radius: 20px;
    margin-top: 10px;
    transition-property: transform;
    transition-duration: 1s;
  }

  .instruction-box:hover {
    background-color: #f7f7f7 !important;
    -ms-transform: scaleY(1.1);
    /* IE 9 */
    transform: scaleY(1.1);
  }

  #productLink,
  #userEmail,
  #userEmailOnOrder,
  #upiID,
  #upiValue {
    width: 100%;
    padding-top: 20px;
    border-color: #82c4c3;
  }

  #upiID,
  #upiValue {
    padding: 0px;
    height: 40px;
  }

  .productDiv {
    color: #31708f;
    background-color: #e7dfd5;
    /* height: 450px; */
    margin: 20px;
    transition-property: transform;
    transition-duration: 2s;
    width: 250px;
  }

  .productDiv:hover {
    box-shadow: 5px 10px 18px #888888;
    color: black !important;
  }

  span {
    font-weight: 800;
    font-size: 15px;
  }

  .offer-stricker {
    background-color: #0181d5;
    color: #ffffff;
    border-radius: 100%;
    font-weight: bold;
    position: absolute;
    /* z-index: 9998; */
    padding: 1em;
  }

  #priceSec {
    margin-top: 20px;
  }

  @media only screen and (max-width: 500px) {
    .productDiv {
      margin-left: 0px;
      width: 350px;
    }

    #prodImg {
      width: 100%;
      height: 100px;
    }

    #listTitleDiv {
      margin-top: 100px;
    }
  }

  @media (max-width: 650px) and (min-width: 500px) {
    .productDiv {
      margin-left: 100px;
      width: 350px;
    }

    #prodImg {
      width: 100%;
      height: 100px;
    }

    #listTitleDiv {
      margin-top: 100px;
    }
  }

  @media (max-width: 991px) and (min-width: 650px) {
    #prodImg {
      width: 100%;
      height: 100px;
    }

    #listTitleDiv {
      margin-top: 100px;
    }

    .productDiv {
      margin-left: 200px;
      width: 350px;
    }
  }

  @media only screen and (min-width: 992px) {
    #prodImg {
      width: 100%;
      height: 200px;
    }
  }
</style>
<div class="container">
  <div class="row">
    <div class="col-md-6 instruction-box">
      <h2>Step 1</h2>
      <p>Go to your preferred ecommerce site(example Amazon, Flipkart, Myntra, etc.) and share the product link you wish to buy.</p>
      <span data-toggle="modal" data-target="#sendLinkForm" style="padding-left: 25%">Share your link>></span>
    </div>
    <div class="col-md-6 instruction-box">
      <h2>Step 2</h2>
      <p>To get Cashback -<ul>
          <li>Share Screenshot of your Order Receipt.</li>
          <li> Share your UPI id/ Google Pay/ Phone Pe/ Paytm number.</li>
        </ul>
      </p>
      <span data-toggle="modal" data-target="#sendOrderConfirmationForm" style="padding-left: 25%">Share order details>></span>
    </div>
    <!-- <div class="col-md-4 instruction-box">
            <h2>Step 3</h2>
            <p>Submit your UPI id and screenshot of successfully placed order.<br/> <span data-toggle="modal" data-target="#sendOrderConfirmationForm">Submit order details>></span></p>            
        </div> -->
    <div class="panel panel-warning" id="listTitleDiv">
      <div class="panel-body">
        <h2 style="text-align: center;">Deals of the Day</h2>
      </div>
    </div>
    <?php
    foreach ($edeal as $eachDeal) {
      echo '<div class="alert col-md-3 productDiv" role="alert"><div class="alert col-md-12" style="color: #8a6d3b;
                background-color: #ffffff;border-color: #2fc4b2;">
                <span>' . $eachDeal['title'] . '</span></div>                
                <div class="col-md-12">
                  <div class="col-md-4 offer-stricker">' . $eachDeal['offer_percent'] . '% OFF </div>
                  <img id="prodImg" src="../../assets/images/edeal_products/' . $eachDeal['image'] . '"">
                </div>
                <div class="col-md-12">
                  <a href="' . $eachDeal['link'] . '" target="_blank" style="text-decoration: underline;"><button style="background-color:#2fc4b2;color: black;font-weight:bold;width:100%;" class="btn">Avail Offer</button></a>
                </div>
                <div class="col-md-12" id="priceSec">
                  <span>Price:<br/> Rs.<span style="color:green;font-size:30px;">' . $eachDeal['offer_price'] . '</span><strike><span style="color:red;"> ' . $eachDeal['actual_price'] . '</span></strike></span>                                
                </div>                
            </div>';
    }
    ?>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="sendLinkForm" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Send Your Link</h4>
      </div>
      <div class="modal-body">
        <p id="formInfoId">**Paste here the product link you wish to buy. We will be sending you a new link on your email id which you submit below, where you stand a chance to win some cashback.</p>
        <label for="productLink"><sup style="color: red;">*</sup>Product Link:</label>
        <input type="text" id="productLink" name="prodLink" required /><br /><br />
        <label for="userEmail"><sup style="color: red;">*</sup>Your Email:</label>
        <input type="text" id="userEmail" name="userEmail" required /><br /><br />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="" id="submitLinkBtn">Send</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="sendOrderConfirmationForm" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Submit Order Details:</h4>
      </div>
      <form action="userOrderDetailsSave" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <p id="orderformInfoId">Submit your UPI id and Screenshot of your successfully placed order (using the link we had sent you on your email id).</p><br />
          <label for="upiID"><sup style="color: red;">*</sup>Select Cashback Method:</label>
          <select id="upiID" name="upiID" required>
            <option value="gpay">Google Pay</option>
            <option value="paytm">Paytm</option>
            <option value="phnpay">Phone Pay</option>
            <option value="otherUPI">UPI ID</option>
          </select><br /><br />
          <label for="upiValue"><sup style="color: red;">*</sup>UPI id/ Google Pay/ Phone Pe/ Paytm number:</label>
          <input type="text" id="upiValue" name="upiValue" required /><br /><br />
          <p id="validate-msg"></p>
          <label for="orderReceiptSs"><sup style="color: red;">*</sup>Receipt Screenshot:</label>
          <input type="file" id="orderReceiptSs" name="orderReceiptSs" required /><br /><br />
          <p style="font-size: 10px;">*Terms & Conditions: <br />
            <ul style="font-size: 10px;">
              <li>You will receive cashback only after the return period applicable on your purchased product is over.</li>
              <li>Cashback amount may vary depending upon the product.</li>
            </ul>
          </p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success" data-dismiss="" id="submitOrderDetailBtn">Send</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </form>
    </div>

  </div>
</div>
<script src="<?php echo base_url() ?>assets/js/custom/edeal-user.js"></script>