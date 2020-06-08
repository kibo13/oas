$(document).ready(function() {
    // add new record 
    $("#add-log").on("click", function(e) {
        e.preventDefault();

        $("#bk-log").hasClass("bk-hidden")
            ? $("#bk-log").removeClass("bk-hidden")
            : $("#bk-log").addClass("bk-hidden");
    });

    // print home depending on street
    $('#bid-street').on('change', e => {
        let num_home = $("#bid-street option:selected").data("home");
        $("#bid-home").val(num_home);
    });
});
