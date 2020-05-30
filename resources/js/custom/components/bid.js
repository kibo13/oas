$(document).ready(function() {

    // add new record 
    $("#add-log").on("click", function(e) {
        e.preventDefault();

        $("#bk-log").hasClass("bk-hidden")
            ? $("#bk-log").removeClass("bk-hidden")
            : $("#bk-log").addClass("bk-hidden");
    });

    // edit current record 
    // $(".bk-btn-edit").on("click", function(e) {

    //     var data_id = $(e.target).data("id");
    //     url = '/logs/' + data_id;

    //     $.ajax({
    //         url: url,
    //         method: "get",
    //     }).done(function(response) {



    //         // $("input[name='editID']").val(id);
    //         // $("input[name='company']").val(response.company);
    //         // $("input[name='to']").val(response.to);
    //         // $("input[name='from']").val(response.from);

  
    //         // check response 
    //         console.log(response.type_log);
    //     });

    // });   
});
