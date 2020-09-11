$(document).ready(function () {
    $("#upiValue").focusout(function () {
        if ($("#upiID").val() === "otherUPI") {
            var userinput = $("#upiValue").val();
            var pattern = /@[a-zA-Z0-9]{3,}/;
            if (pattern.test(userinput) == false) {
                $("#validate-msg").text("Please enter valid UPI id. Ex. xyz@upi");
                $("#validate-msg").addClass('animate__animated animate__shakeY');
                $("#validate-msg").css('color', 'red');
                $("#upiValue").val("");
            } else {
                $("#validate-msg").text("");
            }
        }
    });
    Swal.fire({
        title: 'Please Check Notification Before Availing Offers.',
        icon: 'info',
        showClass: {
            popup: 'animate__animated animate__fadeInDown'
        },
        hideClass: {
            popup: 'animate__animated animate__fadeOutUp'
        }
    })
    $("#bell-icon").addClass('animate__animated animate__swing animate__delay-4s animate__repeat-3');
    $(".notification-count").addClass('animate__animated animate__bounce animate__delay-5s animate__repeat-3');
    $(".productDiv").hover(function () {
        $(".productDiv").addClass('animate__animated animate__shakeX');
    });
    $(document).on("click", "#submitLinkBtn", function () {
        if ($("#productLink").val() == "" || $("#userEmail").val() == "") {
            alert("Please Enter All Fields !!")
        }
        var formData = { "productLink": $("#productLink").val(), "userEmail": $("#userEmail").val() };
        $.getJSON("../../user/edeal/submitProductLink", { "submitLinkWithData": JSON.stringify(formData) }, function (response) {
            if (response['status']) {
                $("#productLink").val("");
                $("#userEmail").val("");
                $("#formInfoId").text(response['message']).css("background-color", "#cceabb");
                setTimeout(function () {
                    $("#formInfoId").text("**Paste here the product link you wish to buy. We will be sending you a new link on your email id which you submit below, where you stand a chance to win some cashback.").css("background-color", "white");
                }, 2000);
            } else {
                alert(response['message']);
            }
        });
    });

    $(document).on("click", "#submitOrderDetailBtn", function () {
        var formData = { "uipID": $("#").val(), "userEmail": $("#").val(), "userEmail": $("#").val() };
        $.getJSON("../../user/edeal/submitProductLink", { "submitLinkWithData": JSON.stringify(formData) }, function (response) {
            if (response['status']) {
                $("#productLink").val("");
                $("#userEmail").val("");
                $("#formInfoId").text(response['message']).css("background-color", "#cceabb");
                setTimeout(function () {
                    $("#formInfoId").text("**Paste here the product link you wish to buy. We will be sending you a new link on your email id which you submit below, where you stand a chance to win some cashback.").css("background-color", "white");
                }, 2000);
            } else {
                alert(response['message']);
            }
        });
    });
});