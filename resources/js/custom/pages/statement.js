$(document).ready(function() {
    // blade-templates
    const istat = document.getElementById("stat-index");
    const fstat = document.getElementById("stat-form");
    const sstat = document.getElementById("stat-show");

    // if active stat-index
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

        // alert control statements
        $("#stat-triangle").on("click mouseenter", e => {
            let elem = e.target;

            if ($(elem).hasClass("bk-btn-triangle--down")) {
                $(elem)
                    .removeClass("bk-btn-triangle--down")
                    .addClass("bk-btn-triangle--up");
            } else {
                $(elem)
                    .removeClass("bk-btn-triangle--up")
                    .addClass("bk-btn-triangle--down");
            }

            $("#stat-list")
                .stop()
                .slideToggle("normal", function() {
                    $(".bk-hidden").toggleClass("bk-hidden");
                });
        });
    }

    // if active stat-form
    else if (fstat) {
        // print addresses depending on plot
        $("#statement-plot").on("change", e => {
            let plot_id = $(e.target).val();
            $("#statement-street").empty();

            $.ajax({
                url: "/data/plots",
                method: "GET"
            }).done(function(streets) {
                $("#statement-street").append(
                    `<option disabled selected>Выберите адрес</option>`
                );

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

    }

    // if active stat-show
    else if (sstat) {
        // fields
        let f_id = document.getElementById("stat-id").value;
        let f_plot = document.getElementById("stat-plot").value;
        let f_receiver = document.getElementById("stat-receiver").value;   
        let f_state = document.getElementById("stat-state");

        $("#show-log").on("click", e => {

            $("#stat-solution").html($("textarea").val());
            let f_solution = $('#stat-solution').text();

            $("#stat-date").html($("input[name=date_off]").val());
            $("#stat-time").html($("input[name=time_off]").val());
            let f_date = $('#stat-date').text();
            let f_time = $("#stat-time").text();

            // check f_date and f_time is empty
            if (f_date == null || f_time == null) {
                alert(`Необходимо заполнить поле "Дата и время действия"`);
                return false;
            }
            // check f_solution is empty
            else if (f_solution == '') {
                alert(`Необходимо заполнить поле "Принятые меры"`);
                return false;
            }
            // check f_state is empty
            else if (f_state.selectedIndex == '') {
                alert(`Выберите тип действия`);
                return false;
            } else {
                $("#log-statement").val(f_id);
                $("#log-date").val(f_date);
                $("#log-time").val(f_time);
                $("#log-state").val(f_state.value);
                $("#log-plot").val(f_plot);
                $("#log-receiver").val(f_receiver);
                $("#log-solution").val(f_solution);
            }
        });
    }
});
