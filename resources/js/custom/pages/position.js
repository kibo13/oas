$(document).ready(function() {
    // blade.index
    const iposition = document.getElementById("position-index");

    if (iposition) {
        let table = document.getElementById("position-table");

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
                    aTargets: [2]
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
