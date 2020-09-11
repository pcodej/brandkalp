<style>
    thead tr{
        height: 50px;
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
  <h2>Requesting Users:</h2>
  <p>This table contains list of all users requesting for contact and want to use our services:</p>            
  <table class="table table-hover" id="prodLinkListTable">
    <thead>
      <tr class="success">
        <th>Email</th>
        <th>User Link</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
</div>
<script src="<?php echo base_url();?>assets/js/custom/edeal-user-links.js"></script>
