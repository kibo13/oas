$(document).ready(function () {
	// wrapper
	const wjob = document.getElementById("job-wrap");

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

	}

});
