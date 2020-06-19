$(document).ready(function () {

	// wrapper 
	const wuser = document.getElementById("user-wrap");

	// collection
	const roles = document.querySelectorAll(".bk-checkbox");

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

	}

});