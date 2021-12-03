$(document).ready(function(){
    init_data();
    $("#category_select").on("change", init_data );
    $("#pagination_wrap").on("click", ".prev-item", prev_page );
    $("#pagination_wrap").on("click", ".next-item", next_page );
    $("#pagination_wrap").on("click", ".number-item", change_page );
});

function prev_page(){
    now_page = $(".page-item.active a").text();
    now_page = now_page < 2 ? 1 : parseInt(now_page) - 1;
    $(".number-item").removeClass("active");
    $($(".number-item")[now_page - 1]).addClass("active");

    init_data();
}

function next_page(){
    now_page = $(".page-item.active a").text();
    total_page = $(".number-item").length;
    now_page = now_page == total_page ? total_page : parseInt(now_page) + 1;
    $(".number-item").removeClass("active");
    $($(".number-item")[now_page - 1]).addClass("active");

    init_data();
}

function change_page(){
    now_page = $(this).find("a").text();
    $(".number-item").removeClass("active");
    $($(".number-item")[now_page - 1]).addClass("active");
    init_data();
}

function init_data(){
    now_page = $(".page-item.active a").text();
    now_page = now_page ? now_page : 1;

    $.ajax({
        url: "/admin/review/load_trade",
        data: {
            page: now_page,
            page_size: 10,
            category_id: $("#category_select").val()
        },
        type: "post",
        dataType: "json",
        success: function(data ){
            if (data["result"] == "success" ){
                $("#trade-table").html(data["data"]);
                $("#pagination_wrap").html(data["pagination"]);

                $(".rating-div").jsRapStar({
                    enabled:false, step: false, length: 5, colorFront: 'yellow', starHeight: 28});
            }
        }
    })
}