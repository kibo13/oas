$(document).ready(function () {

    // alert control statements 
    $('#stat-triangle').on('click mouseenter', e => {

        let elem = e.target;

        if ($(elem).hasClass('bk-btn-triangle--down')) {
            $(elem)
                .removeClass('bk-btn-triangle--down')
                .addClass('bk-btn-triangle--up');
        } else {
            $(elem)
                .removeClass('bk-btn-triangle--up')
                .addClass('bk-btn-triangle--down');
        }

        $('#stat-list').stop().slideToggle('normal', function () {
            $('.bk-hidden').toggleClass('bk-hidden');
        });

    })

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

    // index
    const istat = document.getElementById('stat-index');

    if (istat) {
         let table = document.getElementById("stat-table");

         // setup datatables
         $(table).dataTable({
             language: {
                 searchPlaceholder: "Поиск",
                 url:
                     "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Russian.json"
             },
             aoColumnDefs: [
                 {
                     bSortable: false,
                     aTargets: [-1]
                 }
             ],
             lengthMenu: [
                 [10, 25, 50, -1],
                 [
                     "Показывать по 10",
                     "Показывать по 25",
                     "Показывать по 50",
                     "Все записи"
                 ]
             ]
         });
    }

});
