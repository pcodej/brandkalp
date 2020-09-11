$(document).ready(function () {

    $.getJSON("../../admin/users/get_users", {}, function (response) {
        $.each(response, function (key, value) {
            $("#userListTable >tbody").append(`<tr>
                                                    <td>${value['name']}</td>
                                                    <td>${value['email']}</td>
                                                    <td>${value['phone']}</td>
                                                    <td>${value['message']}</td>
                                                </tr>`);
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