$(document).ready(function() {
    $("#sidebarCollapse").on("click", function() {
        $("#sidebar").toggleClass("active");
        $(this).toggleClass("active");
    });

    $("#logout-link").on("click", function(e) {
        e.preventDefault();
        $("#logout-form").submit();
    });
});
