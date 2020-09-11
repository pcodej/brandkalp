$(document).ready(function () {

    $.getJSON("../../admin/edeal/get_user_provided_product_link", {}, function (response) {
        $.each(response, function (key, value) {
            $("#prodLinkListTable >tbody").append(`<tr>
                                                    <td>${value['email']}</td>
                                                    <td>${value['link']}</td>
                                                    <td><button class="btn ${(value['status'] == 0) ? 'btn-warning' : 'btn-success'}" id="user-discounted-btn">${(value['status'] == 0) ? 'Pending' : 'Sent'}</button></td>
                                                    <td><input type="hidden" id="linkUserId" value="${value['id']}"/></td>
                                                </tr>`);
        });
    });
    $(document).on("click", "#user-discounted-btn", function () {
        var userLinkid = $(this).closest('td').next('td').find('input[type="hidden"]').val();
        $.getJSON("../../admin/edeal/update_user_link_discount_status", { userLinkId: userLinkid }, function (response) {
            if (response['status']) {
                $("#user-discounted-btn").removeClass("btn-warning");
                $("#user-discounted-btn").addClass("btn-success");
                location.reload();
            }
        });
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