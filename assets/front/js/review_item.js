var star = 0;
$(document).ready(function(){
    $(".rating-div").jsRapStar({
        enabled:false, step: false, length: 5, colorFront: 'yellow', starHeight: 28});

    $("#trade_rating").jsRapStar({
        length: 5, colorFront: 'yellow', starHeight: 28,
        onClick: function(score){
            star = score;
        }
    });

    $("#submit_rate").on("click", submit_rate );
})

function submit_rate(){
    var user_name = $("#user_name").val();
    var user_email = $("#user_email").val();

    $.ajax({
        url: "/review/submit_rate",
        data:{
            data:{
                trade_id: $(this).data("tradeid"),
                username: user_name,
                email: user_email,
                rate: star
            }
        },
        type: "post",
        dataType: "json",
        success: function(data ){
            if (data["result"] == "success" ){
                $("#user_name").val("");
                $("#user_email").val("");
                alert("success!");
            }
        }
    })
}