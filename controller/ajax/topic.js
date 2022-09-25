$(document).ready(function(){
    
function display_topic(id){
    $.ajax({
         url: `api/topic.api.php?type=show&id=${id}`,
            type: "GET",
            // beforeSend: function () {
            //     $("#loader").show();
            // },
            success: function (data) {
                 $("#display_topic").empty().html(data)
            }
    })
}    
display_topic($("#subject_id").val());
$("#create_topic").on("submit", function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            url: `api/topic.api.php?type=create`,
            type: "POST",
            data: formdata,
            contentType : false,
            processData : false,
            // beforeSend: function () {
            //     $("#loader").show();
            // },
            success: function (data) {
                display_topic($("#subject_id").val());
                 $("#topic_create_message").empty().html(data).slideDown();
                setTimeout(function(){
                  $("#topic_create_message").empty().html(data).slideUp();
                },3000);
            }
        });
    });
    $(document).on("click",".delete_topic",function(e){
        e.preventDefault();
        var id = $(this).data('id');
        console.log(id);
        $.ajax({
            url: `api/topic.api.php?type=delete&id=${id}`,
                type: "GET",
                // beforeSend: function () {
                //     $("#loader").show();
                // },
                success: function (data) {
                    display_topic($("#subject_id").val());
                }
        })
    })
    $(document).on('click','.accesscamerafortopic', function() {
        console.log("run");
        $("#topic_id").val($(this).data('id'));
        $("#name").val($(this).data('name'));
        console.log($(this).data('id'));
        console.log($(this).data('name'));
        Webcam.reset();
        Webcam.on('error', function() {
            $('#photoModal').modal('hide');
            swal({
                title: 'Warning',
                text: 'Please give permission to access your webcam',
                icon: 'warning'
            });
        });
        Webcam.attach('#my_camera');
    });
    $(document).on("submit",".upload_docs,#upload_docs",function(e){
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            url: `api/topic.api.php?type=upload`,
            type: "POST",
            data: formdata,
            contentType : false,
            processData : false,
            // beforeSend: function () {
            //     $("#loader").show();
            // },
            success: function (data) {
                console.log(data);
                if(data == 'success') {
                    Webcam.reset();

                    $('#my_camera').addClass('d-block');
                    $('#my_camera').removeClass('d-none');

                    $('#results').addClass('d-none');

                    $('#takephoto').addClass('d-block');
                    $('#takephoto').removeClass('d-none');

                    $('#retakephoto').addClass('d-none');
                    $('#retakephoto').removeClass('d-block');

                    $('#uploadphoto').addClass('d-none');
                    $('#uploadphoto').removeClass('d-block');

                    $('#photoModal').modal('hide');

                    swal({
                        title: 'Success',
                        text: 'Photo uploaded successfully',
                        icon: 'success',
                        buttons: false,
                        closeOnClickOutside: false,
                        closeOnEsc: false,
                        timer: 2000
                    })
                }
                else {
                    swal({
                        title: 'Error',
                        text: 'Something went wrong',
                        icon: 'error'
                    })
                }
                display_topic($("#subject_id").val());
                 $("#topic_create_message").empty().html(data).slideDown();
                setTimeout(function(){
                  $("#topic_create_message").empty().html(data).slideUp();
                },3000);
            }
        });
    })
})