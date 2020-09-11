$(document).ready(function () {
    $("#saveNewEdeal").on("click", function () {

        // var formData = {title: $("#eDealTitle").val(), description: $("#edealDesc").val(), link: $("#edealLink").val(), img:$("#productImg").val()}
        // $.getJSON("../../admin/edeal/edealSave", {submitedData: JSON.stringify(formData)}, function(responseONSave){
        //     if(responseONSave['status']){
        //        alert(responseONSave['message']);
        //     }
        // });
    });
    $.getJSON("../../admin/edeal/getEdeals", {}, function (response) {
        $.each(response, function (key, value) {
            $("#edealList >tbody").append(`<tr>
                                                    <td>${value['title']}</td>
                                                    <td><img src="../../assets/images/edeal_products/${value['image']}" id="edealImg"></td>
                                                    <td><button class="btn btn-danger" id="rmv-btn">Remove</button></td>
                                                    <td><input type="hidden" value="${value['id']}"/></td>
                                                </tr>`);
        });
    });
    $(document).on("click", "#rmv-btn", function () {
        var edealId = $(this).closest('td').next('td').find('input[type="hidden"]').val();
        $.getJSON("../../admin/edeal/delete_edeal", { edeal_id: edealId }, function (response) {
            alert(response['message'])
            location.reload();
        });
    });
    $("#cancelNewEdeal").on("click", function () {
        $("#eDealTitle").val("");
        $("#edealDesc").val("");
        $("#edealLink").val("")
    });
    $("#logoutBtn").on("click", function () {
        if (confirm("Are you sure, want to logout")) {
            $.getJSON("../../admin/login/logout_user", {}, function (response) {
                if (response) {
                    window.location.href = "../../admin/login/loginView";
                } else {
                    alert("Falied To logout. Try again");
                }
            });
        }
    });
});