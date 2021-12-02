$(document).ready(function(){
    init_data();
    $(".category_item").on("click", select_category )
})

function select_category(){
    category_id = $(this).data("id")
    $(".category_item").removeClass("active");
    $(this ).addClass("active");

    init_data();
}

function init_data(){
    category_id = $(".category_item.active").data("id");
    category_id = category_id ? category_id : "";

    $.ajax({
        url: "/review/load_reviews",
        data:{
            category_id: category_id
        },
        dataType: "json",
        type: "post",
        success: function(data ){
            if (data["result"] == "success" ){
                $("#reivew_list").html(data["data"]);
                $(".rating-div").jsRapStar({
                    enabled:false, step: false, length: 5, colorFront: 'yellow', starHeight: 28});
            }
        }
    })
}