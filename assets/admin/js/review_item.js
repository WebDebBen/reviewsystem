$(document).ready(function(){
    $(".rating-div").jsRapStar({
        enabled:false, step: false, length: 5, colorFront: 'yellow', starHeight: 28});
    
    $(".switch_status").on("change", change_status );
});

function change_status(){
    var status = $(this).is(":checked") ? 2 : 1;
    $.ajax({
        url: "/admin/review/change_status",
        data:{
            review_id: $(this).data("id"),
            status: status
        },
        type: "post",
        dataType: "json",
        success: function(data ){
            if (data["result"] == "success" ){
                toastr.success('changed the status');
            }
        }
    })
}