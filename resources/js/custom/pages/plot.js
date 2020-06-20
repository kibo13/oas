$(document).ready(function() {
    // blade.index
    const iplot = document.getElementById("plot-index");

    if (iplot) {
        let table = document.getElementById("plot-table");

        // setup datatables
        $(table).dataTable({
            language: {
                searchPlaceholder: "Поиск",
                url:
                    "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Russian.json"
            },
            paging: false,
            bSort: false
        });
    }
});
