<style>
    body {
        font-family: "Montserrat", sans-serif;
    }

    #notificationForm {
        margin-top: 5%;
        margin-left: 20%;
        margin-right: 20%;
        box-shadow: 5px 10px 18px #888888;
        padding: 5%;
    }

    #saveNewNotify,
    #cancelNewNotify {
        margin-top: 25px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-warning" id="logoutBtn">Logout</button>
        </div>
        <div class="col-md-10">
            <ul class="col-md-12">
                <li class="col-md-3"><a href="<?php echo base_url() ?>admin/edeal/edealView">Add Edeal</a></li>
                <li class="col-md-3"><a href="<?php echo base_url() ?>admin/edeal/list_product_links">User Product Links</a></li>
                <li class="col-md-3"><a href="<?php echo base_url() ?>admin/users/list_users">User List</a></li>
                <li class="col-md-3"><a href="<?php echo base_url() ?>admin/notification/add_notification">Add Notification</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <form action="notificationSave" method="POST" enctype="multipart/form-data" id="notificationForm">
            <p style="background-color: green; color: white;"><?php isset($data['message']) ? $data['message'] : ""; ?></p>
            <h1>ADD NEW Notifications</h1>
            <div class="form-group" id="notificationFormSection">
                <label for="notificationTitle">Edeal Title:</label>
                <input type="text" id="notificationTitle" name="title" class="form-control" value="">
                <label for="notificationDesc">Description:</label>
                <textarea id="notificationDesc" name="description" class="form-control"></textarea>
                <label for="notificationType">Notification Priority:</label>
                <div class="radio">
                    <label>
                        <input type="radio" name="notifyPriority" id="normalNotify" value="default">
                        Regular Notification
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="notifyPriority" id="infoNotify" value="primary">
                        Informative Notification
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="notifyPriority" id="importantNotify" value="warning">
                        Suggestions/ Guidlines Notification
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="notifyPriority" id="offerNotify" value="success">
                        Offers Notification
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input type="radio" name="notifyPriority" id="vryImpNotify" value="danger">
                        High Important Notification
                    </label>
                </div>
                <input type="submit" id="saveNewNotify" class="btn btn-success btn-lg" value="SAVE">
                <input type="button" id="cancelNewNotify" class="btn btn-warning btn-lg" value="CANCEL">
            </div>
        </form>
    </div>
    <div class="row">
        <h2>List Of Notification</h2>
        <table class="table table-hover" id="notificationList">
            <thead>
                <tr class="success">
                    <th>Title</th>
                    <th>Description</th>
                    <th>Remove</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/custom/notification-admin.js"></script>