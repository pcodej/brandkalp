$(document).ready(function () {
    // var url = $(location).attr('href'),
    // parts = url.split("/"),
    // last_part = parts[parts.length-1];    
    $("#registerUser").on("click", function () {
        var formData = { name: $("#contactName").val(), emailId: $("#contactEmail").val(), phone: $("#contactNo").val(), message: $("#message").val() }

        function formValidator(formData) {
            var count = 0;
            $.each(formData, function (key, value) {
                if (value === "" || value === null || value === 'undefined') {
                    if (key === "name" && value === "") {
                        $("#contactName").css({ "border-color": "red" });
                        $("#contactName").attr("placeholder", "Enter Your Name");
                        return false;
                    }
                    if (key === "emailId" && value === "") {
                        $("#contactEmail").css({ "border-color": "red" });
                        $("#contactEmail").attr("placeholder", "Enter Your Email Id");
                        return false;
                    }
                    if (key === "message" && value === "") {
                        $("#message").css({ "border-color": "red" });
                        $("#message").attr("placeholder", "Enter your purpose");
                        return false;
                    }
                }
                // if (key === "phone") {
                //     if ((value.length <= 12 && value.length >= 10) && $.isNumeric(value)) {
                //         // do nothing                 
                //     } else {
                //         $("#contactNo").css({ "border-color": "red"});
                //         $("#contactNo").val("");
                //         $("#contactNo").attr("placeholder", "Add valid Contact Number");
                //         return false;
                //     }
                // }
                count++;
            });
            return count;
        }

        if (formValidator(formData) === 4) {

            $.getJSON("../../user/contact/addUserContactDetails", { submitedData: JSON.stringify(formData) }, function (responseONSave) {
                if (responseONSave['status']) {
                    $("#success-msg").css('display', 'block');
                    $("#success-msg").text(responseONSave['message']);
                    $("#success-msg").css('background-color', '#cceabb');
                } else {
                    $("#success-msg").css('display', 'block');
                    $("#success-msg").text(responseONSave['message']);
                    $("#success-msg").css('background-color', '#fa9191');
                }
                setTimeout(function () {
                    $("#success-msg").css('display', 'none');
                    $("#contactNo").val("");
                    $("#contactNo").css("border-color", "");
                    $("#contactName").val("");
                    $("#contactName").css("border-color", "");
                    $("#contactEmail").val("");
                    $("#contactEmail").css("border-color", "");
                    $("#message").val("");
                    $("#message").css("border-color", "");
                }, 3000);
            });
        }

    });
});