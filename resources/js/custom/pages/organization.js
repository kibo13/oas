$(document).ready(function() {

    // blade.index
    const iorgan = document.getElementById("organ-index");

    if (iorgan) {

        let table = document.getElementById("organ-table");

        // setup datatables 
        $(table).dataTable({
            language: {
                searchPlaceholder: "Поиск",
                url:
                    "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Russian.json"
            },
            paging: false,
            aoColumnDefs: [
                {
                    bSortable: false,
                    aTargets: [2]
                }
            ]
        });

    }

});
