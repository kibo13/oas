$(document).ready(function() {
    // blade-templates
    const ibrief = document.getElementById("brief-index");
    const fbrief = document.getElementById("brief-form");

    // if active index.blade.php
    if (ibrief) {
        $("#brief-print").on("click", e => {
            e.preventDefault();

            window.print();
        });
    }

    // if active form.blade.php
    else if (fbrief) {
        // values of pressure
        let values = document.querySelectorAll(".bk-pa");

        for (let val of values) {
            val.addEventListener("change", e => {
                let attr = e.target.dataset.pa;
                let temp = e.target.value;

                switch (attr) {
                    case "hw_pst":
                        $("#hw_pst").val(getMPa(temp));
                        break;

                    case "hw_pbk":
                        $("#hw_pbk").val(getMPa(temp));
                        break;

                    case "cw_r":
                        $("#cw_r").val(getMPa(temp));
                        break;

                    case "cw_ot":
                        $("#cw_ot").val(getMPa(temp));
                        break;

                    case "cw_tf":
                        $("#cw_tf").val(getMPa(temp));
                        break;

                    case "cw_fs":
                        $("#cw_fs").val(getMPa(temp));
                        break;

                    case "cw_s":
                        $("#cw_s").val(getMPa(temp));
                        break;

                    default:
                        break;
                }

            });
        }

        function getMPa(value) {
            let pa = 98066.5;

            return (value * pa) / 1000000;
        }
    }
});
