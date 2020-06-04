$(document).ready(function() {

    // add new record 
    $("#add-log").on("click", function(e) {
        e.preventDefault();

        $("#bk-log").hasClass("bk-hidden")
            ? $("#bk-log").removeClass("bk-hidden")
            : $("#bk-log").addClass("bk-hidden");
    });

    // print defect depending on type
    $('#type').on('change', e => {

        $('#defect_id').empty();
        var type_id = $(e.target).val();

        $.ajax({
            url: '/data/defects',
            method: 'GET',
        }).done(function (defects) {
            for (let defect of defects) {
                if (defect.type_id == type_id) {
                    $('#defect_id').append(`<option value="${defect.id}">${defect.desc}</option>`);
                }
            }
        })      
    });
});
