$(document).ready(function(){
    $("#saveNewEdeal").on("click", function(){
        var formData = {title: $("#eDealTitle").val(), description: $("#edealDesc").val(), link: $("#edealLink").val()}
        $.getJSON("../../admin/edeal/edealSave", {submitedData: JSON.stringify(formData)}, function(responseONSave){
            if(responseONSave['status']){
                alert(responseONSave['message']);
            }
        });
    });
    $("#cancelNewEdeal").on("click", function(){
        $("#eDealTitle").val(""); 
        $("#edealDesc").val("");
        $("#edealLink").val("")
    });
});