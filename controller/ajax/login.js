$(document).ready(function(){
    $("#login").on('submit',function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            url: `api/login.api.php`,
            type:"POST",
            data:formdata,
              contentType : false,
      processData : false,
            // beforeSend: function () {
            //     $("#loader").modal('show');
            // },
            success: function (data) {
                
                data = $.parseJSON(data);
                console.log(data);
                if (data.status == true) {
                    $("#login_message").html("<div class='alert alert-success'>Login Success</div>");
                    window.location.href = "add_course.php";
                }else{
                    $("#login_message").html("<div class='alert alert-danger'>Login Failed</div>");
                }
            }
        })
    })
})
