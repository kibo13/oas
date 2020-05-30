$(document).ready(function() {

    $("#add-log").on("click", function(e) {
        e.preventDefault();

        $("#bk-log").hasClass("bk-hidden")
            ? $("#bk-log").removeClass("bk-hidden")
            : $("#bk-log").addClass("bk-hidden");
    });

    $("#edit-log").on("click", function(e) {
        e.preventDefault();

        $("#bk-log").hasClass("bk-hidden")
            ? $("#bk-log").removeClass("bk-hidden")
            : $("#bk-log").addClass("bk-hidden");
    });

    // $('#bid-loc-btn').on('click', function (e) {
    // 	e.preventDefault();

    // 	$('#bid-dis').addClass('bk-hidden');
    // 	$('#bid-loc-btn').addClass('active');
    // 	$('#bid-loc').removeClass('bk-hidden');
    // 	$('#bid-dis-btn').removeClass('active');
    // });

    // $('#bid-dis-btn').on('click', function (e) {
    // 	e.preventDefault();

    // 	$('#bid-loc').addClass('bk-hidden');
    // 	$('#bid-dis-btn').addClass('active');
    // 	$("#bid-dis").removeClass("bk-hidden");
    // 	$("#bid-loc-btn").removeClass("active");
    // });
});
