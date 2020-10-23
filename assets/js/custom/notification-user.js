$(document).ready(function () {

    $.getJSON("../../user/notification/get_notifications", {}, function (response) {
        $.each(response['notification_data'], function (key, value) {
            $("#notification-list").append(`<div class="panel panel-${value['type']}">
                <div class="panel-heading" id="notification-title">${value['title']}</div>
                <div class="panel-body" id="notification-body">
                    ${value['description']}<br/>
                    <a href="${value['link']}" target="_blank" style="text-decoration: underline;" id="link_${value['id']}"><button id="btn_${value['id']}" style="background-color:#2fc4b2;color: white;font-weight:bold;" class="btn">Avail Offer</button></a>
                </div>
            </div>`);
            if(value['link'] == ""){
                $("#btn_"+value['id']).css("display","none");
            }
        });

    });

});
