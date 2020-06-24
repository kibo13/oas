$(document).ready(function() {
    // wrapper
    const wjob = document.getElementById("job-wrap");
    // index
    const ijob = document.getElementById("job-index");

    // if active form.blade.php
    if (wjob) {

        let slug = document.getElementById("job-slug");
        let checks = document.querySelectorAll(".bk-chk");
        let temp = [];

        // compare dates
        $("#job-save").on("click", e => {
            let off = new Date($("#job-start").val());
            let on = new Date($("#job-end").val());

            if (off > on) {
                alert("Дата начала работы не должна быть позже даты окончания");
                return false;
            }
        });

        // add events to checker
        for (let ch of checks) {
            ch.addEventListener("click", e => {
                $.ajax({
                    url: "/data/plots",
                    method: "GET"
                }).done(function(plots) {
                    for (let plot of plots) {
                        if (ch.value == plot.address_id) {

                            if (ch.checked) {
                                temp.push(plot.branch_id);
                            } else {
                                temp.pop(plot.branch_id);
                            }
                            
                        }
                    }

                    console.log(temp);
                    slug.value = Array.from(new Set(temp));
                });     
            });
            
        }
        
    }

    // if active index.blade.php
    else if (ijob) {
        let table = document.getElementById("job-table");

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
