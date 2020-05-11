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
</style>
<div class="container">
    <div class="row">        
        <form action="" id="edealForm">
            <h1>ADD NEW E-DEAL</h1>
            <div class="form-group" id="edealFormSection">
                <label for="edealTitle">Edeal Title:</label>
                <input type="text" id="eDealTitle" name="title" class="form-control" value="">
                <label for="edealDesc">Description:</label>
                <textarea id="edealDesc" name="description" class="form-control"></textarea>
                <label for="edealLink">Desired Link:</label>
                <input type="text" id="edealLink" name="link" class="form-control" value="">
                <input type="button" id="saveNewEdeal" class="btn btn-success btn-lg" value="SAVE">
                <input type="button" id="cancelNewEdeal" class="btn btn-warning btn-lg" value="CANCEL">
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url()?>assets/js/custom/edeal.js"></script>