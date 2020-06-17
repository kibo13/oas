$(document).ready(function() {

    // alert 
    

    // print addresses depending on plot 
    $("#statement-plot").on("change", e => {

        let plot_id = $(e.target).val();
        $('#statement-street').empty();

        $.ajax({
            url: '/data/plots',
            method: 'GET',
        }).done(function (streets) {
            $('#statement-street').append(`<option disabled selected>Выберите адрес</option>`);

            for (let street of streets) {
                if (street.branch_id == plot_id) {
                    $("#statement-street").append(
                        `<option value="${street.street_id}" data-home="${street.num_home}">
                            ${street.name} д.${street.num_home}
                        </option>`
                    );
                }
            }
        });

    });

    // print home depending on street
    $("#statement-street").on("change", e => {
        let num_home = $("#statement-street option:selected").data("home");
        $("#statement-home").val(num_home);
    });

});
