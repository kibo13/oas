$(document).ready(function() {
    // print home depending on street
    $("#statement-street").on("change", e => {
        let num_home = $("#statement-street option:selected").data("home");
        $("#statement-home").val(num_home);
    });
});
