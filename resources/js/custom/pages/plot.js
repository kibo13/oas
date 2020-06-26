$(document).ready(function() {
    // blade.index
    const iplot = document.getElementById("plot-index");

    if (iplot) {
        // show-hide plots
        $(".bk-triangle").on("click", e => {
            let elem = e.target;
            let tip = e.target.parentNode.parentNode;

            if ($(elem).hasClass("bk-btn-triangle--down")) {
                $(elem)
                    .removeClass("bk-btn-triangle--down")
                    .addClass("bk-btn-triangle--up");
            } else {
                $(elem)
                    .removeClass("bk-btn-triangle--up")
                    .addClass("bk-btn-triangle--down");
            }

            if (tip.classList.contains("bk-plot-active")) {
                $(tip).removeClass("bk-plot-active");
            } else {
                $(tip).addClass("bk-plot-active");
            }
        });
    }
});
