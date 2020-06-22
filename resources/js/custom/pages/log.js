$(document).ready(function() {
    const log_modal = document.getElementById("bk-log-modal");

    if (log_modal) {
        // all buttons to bk-log-modal
        let buttons = document.querySelectorAll(".bk-log-btn");

        for (let btn of buttons) {
            let attr = btn.dataset.id;

            btn.addEventListener("click", e => {
                // buttons close
                if (attr != 1) {
                    $(".bk-log-checkbox").prop("checked", false);
                }

                // button ajax
                else {

                  let statement_id = $('#log-statement').val();
                  let date_log = $('#log-date').val();
                  let time_log = $('#log-time').val();
                  let solution = $('#log-solution').val();
                  let receiver = $('#log-receiver').val();
                  let plot = $('#log-plot').val();
                  let state = $('#log-state').val();

                  $.ajax({
                      url: "/logs",
                      type: "POST",
                      data: {
                        statement_id, 
                        date_log,
                        time_log,
                        solution,
                        receiver,
                        plot,
                        state
                      },
                      headers: {
                          "X-CSRF-Token": $('meta[name="csrf-token"]').attr(
                              "content"
                          )
                      },
                      success: function(data) {
                        $('#stat-success').removeClass('bk-hidden');
                        $(".bk-log-checkbox").prop("checked", true);
                        $(".bk-log-checkbox").prop("disabled", true);
                        $(log_modal).modal("hide");
                      },

                      error: function(msg) {
                          $("#stat-danger").removeClass("bk-hidden");
                          $(".bk-log-checkbox").prop("checked", false);
                          $(log_modal).modal("hide");
                      }
                  });
                }
            });
        }
    }
});
