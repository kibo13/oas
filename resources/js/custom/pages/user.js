$(document).ready(function () {

	// wrapper 
	const wuser = document.getElementById("user-wrap");

	// index 
	const iuser = document.getElementById("user-index");

	// collection
	const roles = document.querySelectorAll(".bk-checkbox");

	// if active form.blade.php 
	if (wuser) {

		// counter 
		let count = 0;  

		// calc of checked roles
		for (let role of roles) {

			let value = role.value;

			if (role.checked) {
				
				if ((value == 4) || (value >= 9 && value <= 13)) {
					count++
				} 

			}

		}

		// addEventListener for roles  
		for (let role of roles) {

			role.addEventListener('click', e => {

				let value = e.target.value;

				if ((value == 4) || (value >= 9 && value <= 13)) {
					role.checked ? count++ : count--;
				}

			})

		}

		// onclick for btn-save 
		$("#user-save").on("click", e => {

			if (count > 1) {
				alert('Невозможно назначить пользователю более двух участков');
				return false;
			}
						
		});

	} else 

	// if active index.blade.php
	if (iuser) {
		 let table = document.getElementById("user-table");

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
                     aTargets: [3]
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