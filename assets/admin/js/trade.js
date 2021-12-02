$(document).ready(function(){
    validate_form();
    init_data();
    $("#new_trade").on("click", show_new_modal );
    $("#save_trade").on("click", save_trade );
    $("#category_select").on("change", init_data );
    $("#pagination_wrap").on("click", ".prev-item", prev_page );
    $("#pagination_wrap").on("click", ".next-item", next_page );
    $("#pagination_wrap").on("click", ".number-item", change_page );
    $("#trade-table").on("click", ".edit-btn", show_edit_modal );
    $("#trade-table").on("click", ".delete-btn", delete_trade );
});

function validate_form(){
    $("#trade_form").validate({
        rules: {
            input_category: "required",
            input_trade: "required",
            input_company: "required",
            input_phone: "required",
            input_website: "required",
            input_email: {
                required: true,
                email: true
            },
            input_note: "required"
        },
        messages: {
            input_category: "Please select category name",
            input_trade: "Please input trade name",
            input_company: "Please input company",
            input_phone: "Please input phone number",
            input_website: "Please input website url",
            input_email: "Please input a valid email address",
            input_note: "Please input note"
        },
        submitHandler: function(form) {
            $.ajax({
                url: "/admin/trade/save_trade",
                data: {
                    data: {
                        category_id: $("#input_category").val(),
                        name: $("#input_trade").val(),
                        company_name: $("#input_company").val(),
                        phonenumber: $("#input_phone").val(),
                        website: $("#input_website").val(),
                        email: $("#input_email").val(),
                        note: $("#input_note").val()
                    },
                    trade_id: $("#trade_id").val()
                },
                dataType: "json",
                type: "post",
                success: function(data){
                    if (data["result"] == "success" ){
                        toastr.success('success!');
                        location.href = location.href
                    }
                }
            });
        }
    });
}

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
        url: "/admin/trade/load_trade",
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
            }
        }
    })
}

function show_new_modal(){
    $("#trade_id").val("-1"); 
    $("#modal-body input").val("");
    $("#input_category").val("");
    $("#trade_modal").modal("show");
}


function show_edit_modal(){
    var category_id = $(this).attr("data-categoryid");
    var name = $(this).parent().parent().find(".trade_name").text();
    var company_name = $(this).parent().parent().find(".company_name").text();
    var phonenumber = $(this).parent().parent().find(".phonenumber").text();
    var website = $(this).parent().parent().find(".website").text();
    var email = $(this).parent().parent().find(".email").text();
    var note = $(this).parent().parent().find(".note").text();

    $("#input_category").val(category_id.trim() );
    $("#input_trade").val(name.trim() );
    $("#input_company").val(company_name.trim() );
    $("#input_phone").val(phonenumber.trim() );
    $("#input_website").val(website.trim() );
    $("#input_email").val(email.trim() );
    $("#input_note").val(note.trim() );
    $("#input_category").change();

    $("#trade_id").val($(this).attr("data-id")); 
    $("#trade_modal").modal("show");
}

function delete_trade(){
    if (!confirm("Are you really delete the trade?")) return;
    $.ajax({
        url: "/admin/trade/delete_trade",
        type: "post",
        data: {
            trade_id: $(this).attr("data-id")
        },
        dataType: "json",
        success: function(data ){
            if (data["result"] == "success" ){
                toastr.success('success!');
                location.href = location.href
            }
        }
    })
}

function save_trade(){
    $("#trade_form").submit()
}