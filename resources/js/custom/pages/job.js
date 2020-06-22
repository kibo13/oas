$(document).ready(function () {
	// wrapper
	const wjob = document.getElementById("job-wrap");
	// index 
	const ijob = document.getElementById('job-index');

	// if active form.blade.php 
	if (wjob) {

		$("#job-save").on("click", e => {

			let off = new Date($("#job-start").val());
			let on = new Date($("#job-end").val());

			if (off > on) {
				alert(
					"Дата начала работы не должна быть позже даты окончания"
				);
				return false;
			}

		});

	} else 

	// if active index.blade.php 
	if (ijob) {
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