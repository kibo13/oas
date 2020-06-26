$(document).ready(function() {
    // blade-templates
    const istat = document.getElementById("stat-index");
    const fstat = document.getElementById("stat-form");
    const sstat = document.getElementById("stat-show");

    // if active stat-index
    if (istat) {
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

        $('#date-time').on('click', e => {

            if (e.target.checked) {
                $("#date_in").removeClass("bk-disabled");
                $("#time_in").removeClass("bk-disabled");
            } else {
                $("#date_in").addClass("bk-disabled");
                $("#time_in").addClass("bk-disabled");
            }
           
        })
       
        // print home depending on street
        $("#stat-street").on("change", e => {

            let add_id = $("#stat-street option:selected").data("id");
            let num_home = $("#stat-street option:selected").data("home");
            
            // set num_home to field of num_home
            $("#stat-home").val(num_home);

            $.ajax({
                url: "/data/plots",
                method: "GET"
            }).done(function(plots) {
                
                for (let plot of plots) {

                    if (add_id == plot.address_id) {

                        // set branch_id to field of branch_id
                        $("#stat-branch").val(plot.branch_id);

                        // set branch_name to field of branch_name
                        $('#stat-plot').text(plot.name);
                    }

                }

            });

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
