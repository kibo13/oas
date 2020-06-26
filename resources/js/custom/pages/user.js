$(document).ready(function() {
    // blade-templates
    const iuser = document.getElementById("user-index");
    const fuser = document.getElementById("user-wrap");

    // if active form.blade.php
    if (fuser) {
        // field of role
        let f_role = document.getElementById("user-slug");

        // select of roles
        let select = document.getElementById("role-select");

        // checkboxs
        let checkboxs = document.querySelectorAll(".bk-checkbox");

        select.onchange = e => {
            let val = e.target.options[select.selectedIndex].value;
            let attr = e.target.options[select.selectedIndex].dataset.slug;

            // set option:selected to field of role
            f_role.value = val;

            // switch off checkboxs
            $(checkboxs).prop("checked", false);

            // why selected
            switch (attr) {
                case "admin":
                    $(checkboxs).prop("checked", true);
                    break;

                case "oas":
                    $(".home").prop("checked", true);
                    $(".bid_read").prop("checked", true);
                    $(".bid_full").prop("checked", true);
                    $(".job_read").prop("checked", true);
                    $(".job_full").prop("checked", true);
                    $(".prom_read").prop("checked", true);
                    $(".emp_read").prop("checked", true);
                    $(".grap_read").prop("checked", true);
                    $(".grap_full").prop("checked", true);
                    $(".plot_read").prop("checked", true);
                    $(".plot_full").prop("checked", true);
                    $(".repo").prop("checked", true);
                    break;

                case "zheu1":
                case "zheu2":
                case "zheu3":
                case "zheu4":
                case "zheu5":
                    $(".home").prop("checked", true);
                    $(".bid_read").prop("checked", true);
                    $(".bid_full").prop("checked", true);
                    $(".job_read").prop("checked", true);
                    $(".prom_read").prop("checked", true);
                    $(".emp_read").prop("checked", true);
                    $(".grap_read").prop("checked", true);
                    $(".plot_read").prop("checked", true);
                    $(".plot_full").prop("checked", true);
                    break;

                case "pts":
                    $(".build_read").prop("checked", true);
                    $(".build_full").prop("checked", true);
                    $(".address_read").prop("checked", true);
                    $(".address_full").prop("checked", true);
                    $(".defect_read").prop("checked", true);
                    $(".defect_full").prop("checked", true);
                    $(".repo").prop("checked", true);
                    break;

                case "hh":
                    $(".emp_read").prop("checked", true);
                    $(".emp_full").prop("checked", true);
                    $(".branch_read").prop("checked", true);
                    $(".branch_full").prop("checked", true);
                    break;

                case "audit":
                    $(".prom_read").prop("checked", true);
                    $(".prom_full").prop("checked", true);
                    break;

                case "user":
                    $(".home").prop("checked", true);
                    $(".bid_read").prop("checked", true);
                    $(".prom_read").prop("checked", true);
                    $(".job_read").prop("checked", true);
                    $(".emp_read").prop("checked", true);
                    $(".grap_read").prop("checked", true);
                    break;

                default:
                    break;
            }
        };

        // cheking access to home-page
        $("#user-save").on("click", e => {
            let slug = document.getElementById("user-slug").value;
            let home = document.querySelector(".home");

            if (slug != '') {
                if (slug < 8 || slug > 10) {
                    if (!home.checked) {
                        alert(`Для заданной роли необходимо указать доступ к разделу "Главная"`);
                        return false;
                    }
                }
            }
        });
    }

    // if active index.blade.php
    else if (iuser) {
        // show-hide permissions
        $(document).on("click", ".bk-triangle", e => {
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

            if (tip.classList.contains("bk-perm-active")) {
                $(tip).removeClass("bk-perm-active");
            } else {
                $(tip).addClass("bk-perm-active");
            }
        });
    }
});
