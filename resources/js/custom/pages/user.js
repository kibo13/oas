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
    }

    // if active index.blade.php
    else if (iuser) {
        let table = document.getElementById("user-table");

        // setup datatables
        $(table).dataTable({
            language: {
                searchPlaceholder: "Поиск",
                url:
                    "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Russian.json"
            },
            aoColumnDefs: [
                {
                    bSortable: false,
                    aTargets: [-1]
                }
            ],
            lengthMenu: [
                [10, 25, 50, -1],
                [
                    "Показывать по 10",
                    "Показывать по 25",
                    "Показывать по 50",
                    "Все записи"
                ]
            ]
        });

        // show-hide permissions
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

            if (tip.classList.contains("bk-perm-active")) {
                $(tip).removeClass("bk-perm-active");
            } else {
                $(tip).addClass("bk-perm-active");
            }
        });
    }
});
