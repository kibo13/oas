$(document).ready(function() {
    // wrapper
    const wprom = document.getElementById("promiser-wrap");

    // index 
    const iprom = document.getElementById('promiser-index');

    // if active form.blade.php 
    if (wprom) {

        $("#promiser-save").on("click", e => {

            let off = new Date($("#promiser-off").val()); 
            let on  = new Date($("#promiser-on").val()); 

            if (off > on) {
                alert(
                    "Дата отключения не должна быть позже даты подключения"
                );
                return false;
            }

        });

    } else 

    // if active index.blade.php 
    if (iprom) {
        let table = document.getElementById("promiser-table");

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
