$(document).ready(function() {

    // add new record 
    $("#add-log").on("click", function(e) {
        e.preventDefault();

        $("#bk-log").hasClass("bk-hidden")
            ? $("#bk-log").removeClass("bk-hidden")
            : $("#bk-log").addClass("bk-hidden");
    });

    // print home depending on street
    $('#bid-street').on('change', e => {
        let num_home = $("#bid-street option:selected").data("home");
        $("#bid-home").val(num_home);
    });
    
    // print streets depending on plot
    $('#bid-plot').on('change', e => {

        $('#bid-street').empty();
        var plot_id = $(e.target).val();

        $.ajax({
            url: '/data/plots',
            method: 'GET',
        }).done(function (streets) {
            $('#bid-street').append(`<option disabled selected>Выберите улицу</option>`);

            for (let street of streets) {
                if (street.branch_id == plot_id) {
                    $("#bid-street").append(
                        `<option value="${street.street_id}" data-home="${street.num_home}">
                            ${street.name} д.${street.num_home}
                        </option>`
                    );
                }
            }
        });
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
