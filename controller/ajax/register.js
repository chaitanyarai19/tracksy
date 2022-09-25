$(document).ready(function () {
    // mail function
    // var mail = (mailId) => {
    //     $.ajax({
    //         url: "api/tourist.registration.api.php?type=tourist-mail-verification",
    //         type: "POST",
    //         data: JSON.stringify({ email: mailId }),
    //         success: function (data) {
    //             $("#otp").show();
    //             console.log(data);
    //             data = $.parseJSON(data);
    //             if (data.status == true) {
    //                 resendOTP();
    //             }
    //             alert(data.status, data.message);
    //         }
    //     });
    // }
    // //email verification otp sender
    // $("#email").on("change", function (e) {
    //     mail($(this).val())
    // })
    // //otp resend at 5 minutes
    // var resendOTP = () => {
    //     setTimeout(() => {
    //         $("#resend").show();
    //         $.ajax({
    //             url: "api/tourist.registration.api.php?type=destroy-otp",
    //             type: "GET",
    //         })
    //     }, 50000);
    // }
    // //resend otp
    // $("#resend").on("click", function (e) {
    //     e.preventDefault();
    //     mail($("#email").val());
    // })
    // //verify email
    // $("#checkVerify").on("click", function () {
    //     if ($("#otpValue").val() != "") {
    //         $.ajax({
    //             url: "api/tourist.registration.api.php?type=verify-otp",
    //             type: "POST",
    //             data: JSON.stringify({ otp: $("#otpValue").val() }),
    //             success: function (data) {
    //                 console.log(data);
    //                 data = $.parseJSON(data);
    //                 if (data.status == true) {
    //                     $("#otp").empty();
    //                     $("#tourist_registration_submit_button").attr('disabled',false);
    //                 } 
    //                 alert(data.status, data.message);
    //             }
    //         })
    //     } else {
    //         alert(false,'please enter otp');
    //     }
    // })
    //save tourist details
    $("#register").on("submit", function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            url: `api/register.api.php`,
            type: "POST",
            data: formdata,
             contentType : false,
      processData : false,
            // beforeSend: function () {
            //     $("#loader").show();
            // },
            success: function (data) {
                 $("#register_message").empty().html(data).slideDown();
        setTimeout(function(){
          $("#register_message").empty().html(data).slideUp();
        },3000);
            }
        });
    });
}); 
