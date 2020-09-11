$(document).ready(function () {
    $.getJSON("../../admin/notification/getNotifications", {}, function (response) {
        $.each(response, function (key, value) {
            $("#notificationList >tbody").append(`<tr>
                                                    <td>${value['title']}</td>
                                                    <td>${value['description']}</td>
                                                    <td><button class="btn btn-danger" id="rmv-btn">Remove</button></td>
                                                    <td><input type="hidden" value="${value['id']}"/></td>
                                                </tr>`);
        });
    });
    $(document).on("click", "#rmv-btn", function () {
        var notiID = $(this).closest('td').next('td').find('input[type="hidden"]').val();
        $.getJSON("../../admin/notification/delete_notification", { noti_id: notiID }, function (response) {
            alert(response['message'])
            location.reload();
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