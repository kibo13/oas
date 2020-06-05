$(document).ready(function() {

    // add new record 
    $("#add-log").on("click", function(e) {
        e.preventDefault();

        $("#bk-log").hasClass("bk-hidden")
            ? $("#bk-log").removeClass("bk-hidden")
            : $("#bk-log").addClass("bk-hidden");
    });

    // print streets depending on plot
    $('#bid-plot').on('change', e => {

        // $('#street_id').empty();
        var plot_id = $(e.target).val();

        $.ajax({
            url: '/data/defects',
            method: 'GET',
        }).done(function (streets) {
            $('#street_id').append(`<option disabled selected>Выберите улицу</option>`);

            
        });

        // checking 
        console.log(plot_id);
    });


    // print defect depending on type
    $('#bid-type').on('change', e => {

        $('#defect_id').empty();
        var type_id = $(e.target).val();

        $.ajax({
            url: '/data/defects',
            method: 'GET',
        }).done(function (defects) {

            $('#defect_id').append(`<option disabled selected>Выберите неисправность</option>`);

            for (let defect of defects) {
                if (defect.type_id == type_id) {
                    $('#defect_id').append(`<option value="${defect.id}">${defect.desc}</option>`);
                }
            }
        })      
    });
});
