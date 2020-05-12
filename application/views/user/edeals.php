<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $this->load->helper('url');
?>
<style>
    body {
        font-family: "Montserrat", sans-serif;
    }
    span {
        font-weight: 800;
        font-size: 20px;
    }
    
</style>
<div class="container">
    <div class="row">
    <div class="panel panel-warning">
        <div class="panel-body">
            <h2 style="text-align: center;">List Of Edeals </h2>
        </div>
    </div>
        <?php 
            foreach($edeal as $eachDeal){
                echo '<div class="alert alert-info" role="alert"><div class="alert alert-warning">
                <span>'.$eachDeal['title'].'</span></div>
                <p>'.$eachDeal['description'].'</p>
                <a href="'.$eachDeal['description'].'" target="_blank">'.$eachDeal['link'].'</a>
            </div>';
            }
        ?>
    </div>
</div>