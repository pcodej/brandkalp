$(document).ready(function () {

    $.getJSON("../../user/notification/get_notifications", {}, function (response) {
        $.each(response['notification_data'], function (key, value) {
            $("#notification-list").append(`<div class="panel panel-${value['type']}">
                <div class="panel-heading" id="notification-title">${value['title']}</div>
                <div class="panel-body" id="notification-body">
                    ${value['description']}
                </div>
            </div>`);
        });

    });

});
