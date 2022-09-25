$(document).ready(function(){
    
function display_resource(id,name){
    $.ajax({
         url: `api/resource.api.php?type=show&id=${id}&name=${name}`,
            type: "GET",
            // beforeSend: function () {
            //     $("#loader").show();
            // },
            success: function (data) {
                 $("#display_resource").empty().html(data)
            }
    })
}    
display_resource($("#resource_id").val(),$("#name").val());
$("#upload_resource").on("submit", function (e) {
        e.preventDefault();
        var formdata = new FormData(this);
        $.ajax({
            url: `api/resource.api.php?type=upload`,
            type: "POST",
            data: formdata,
            contentType : false,
            processData : false,
            // beforeSend: function () {
            //     $("#loader").show();
            // },
            success: function (data) {
                display_resource($("#resource_id").val(),$("#name").val());
                 $("#resource_upload_message").empty().html(data).slideDown();
                setTimeout(function(){
                  $("#resource_upload_message").empty().html(data).slideUp();
                },3000);
            }
        });
    });
})