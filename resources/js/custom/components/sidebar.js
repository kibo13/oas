$(document).ready(function () {

	// slidabar-toggle 
	$("#sidebarCollapse").on("click", function () {
		$("#sidebar").toggleClass("active");
		$(this).toggleClass("active");
	});

});
