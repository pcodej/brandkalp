<style>
    body {
        font-family: "Montserrat", sans-serif;
    }
    #edealForm {
        margin-top: 5%;
        margin-left: 20%;
        margin-right: 20%;
        box-shadow: 5px 10px 18px #888888;
        padding: 5%;
    }
    #saveNewEdeal, #cancelNewEdeal {
       margin-top: 25px;
    }
    #edealImg {
        width: 40px;
        height: 40px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-warning" id="logoutBtn">Logout</button> 
        </div>
        <div class="col-md-10">
            <ul class="col-md-12">
                <li class="col-md-3"><a href="<?php echo base_url()?>admin/edeal/edealView">Add Edeal</a></li>
                <li class="col-md-3"><a href="<?php echo base_url()?>admin/edeal/list_product_links">User Product Links</a></li>
                <li class="col-md-3"><a href="<?php echo base_url()?>admin/users/list_users">User List</a></li>
                <li class="col-md-3"><a href="<?php echo base_url()?>admin/notification/add_notification">Add Notification</a></li>
            </ul>
        </div>
    </div>
    <div class="row">        
        <form action="edealSave" method="POST" enctype="multipart/form-data" id="edealForm">
            <h1>ADD NEW E-DEAL</h1>
            <div class="form-group" id="edealFormSection">
                <label for="edealTitle">Edeal Title:</label>
                <input type="text" id="eDealTitle" name="title" class="form-control" value="">
                <label for="edealDesc">Description:</label>
                <textarea id="edealDesc" name="description" class="form-control" disabled></textarea>
                <label for="edealLink">Desired Link:</label>
                <input type="text" id="edealLink" name="link" class="form-control" value="">
                <label for="productImg">Product Image:</label>
                <input type="file" id="productImg" name="productImg" class="form-control">
                <label for="mrpActual">Actual Price:</label>
                <input style="width:50%;" type="text" id="mrpActual" name="mrpActual" class="form-control" value="">
                <label for="mrpOffer">Offer Price:</label>
                <input style="width:50%;" type="text" id="mrpOffer" name="mrpOffer" class="form-control" value="">
                <label for="precentDiscount">Percent OFF Value:</label>
                <input  style="width:50%;" type="text" id="precentDiscount" name="precentDiscount" class="form-control" value="">
                <input type="submit" id="saveNewEdeal" class="btn btn-success btn-lg" value="SAVE">
                <input type="button" id="cancelNewEdeal" class="btn btn-warning btn-lg" value="CANCEL">
            </div>
        </form>
    </div>
    <div class="row">
        <h2>List Of Edeals</h2>       
        <table class="table table-hover" id="edealList">
            <thead>
            <tr class="success">
                <th>Title</th>
                <th>Image</th>
                <th>Remove</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo base_url()?>assets/js/custom/edeal.js"></script>