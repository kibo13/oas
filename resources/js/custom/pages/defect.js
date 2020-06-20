$(document).ready(function() {
    // blade.index
    const idefect = document.getElementById("defect-index");

    if (idefect) {
        let table = document.getElementById("defect-table");

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
                    aTargets: [4]
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
