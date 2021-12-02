$(document).ready(function(){
    $("#new_category").on("click", show_new_modal );
    $("#save_category").on("click", save_category );
    $("#category-table").on("click", ".edit-btn", show_edit_modal );
    $("#category-table").on("click", ".delete-btn", delete_category );
})

function show_new_modal(){
    $("#category_id").val("-1");
    $("#category_name").val("");
    $("#category_modal").modal("show");
}

function show_edit_modal(){
    $("#category_id").val($(this).attr("data-id"));
    $("#category_name").val($(this).attr("data-name"));
    $("#category_modal").modal("show");   
}

function delete_category(){
    if (!confirm("Are you really delete the category?")) return;
    $.ajax({
        url: "/admin/category/delete_category",
        type: "post",
        data: {
            category_id: $(this).attr("data-id")
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

function save_category(){
    if ($("#category_name").val() == ""){
        toastr.warning('Input the category name');
        return;
    }

    $.ajax({
        url: "/admin/category/save_category",
        type: "post",
        data: {
            category_name: $("#category_name").val(),
            category_id: $("#category_id").val()
        },
        dataType: "json",
        success: function(data ){
            if (data["result"] == "success" ){
                $("#category_modal").modal("hide");
                toastr.success('success!');
                location.href = location.href
            }
        }
    })
}