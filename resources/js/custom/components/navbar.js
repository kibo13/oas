$(document).ready(function () {

	// logout
	$("#logout-link").on("click", function (e) {
		e.preventDefault();
		$("#logout-form").submit();
	});
	
});