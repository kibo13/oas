$(document).ready(function() {
    // wrapper
    const wrepo = document.getElementById("repo-wrap");

    // collectiions
    const forms = document.querySelectorAll(".bk-repo");

    // repo-menu
    const rmenu = document.getElementById("repo-menu");

    if (wrepo) {
        // added event for repo-menu
        rmenu.onchange = e => {
            let ElemID = e.target.options[rmenu.selectedIndex].value;

            for (let form of forms) {
                let attr = form.dataset.id;
                if (attr == ElemID) {
                    form.classList.remove("bk-hidden");
                } else {
                    form.classList.add("bk-hidden");
                }
            }
        };

        // actions for report #1
        const repo1_from = document.getElementById("repo1_from");
        const repo1_to = document.getElementById("repo1_to");

        repo1_from.onchange = e => plusDay(repo1_from, repo1_to);
        repo1_to.onchange = e => minusDay(repo1_from, repo1_to);

        // actions for report #2
        const repo2_from = document.getElementById("repo2_from");
        const repo2_to = document.getElementById("repo2_to");

        repo2_from.onchange = e => plusDay(repo2_from, repo2_to);
        repo2_to.onchange = e => minusDay(repo2_from, repo2_to);

        // actions for report #3
        const repo3_from = document.getElementById("repo3_from");
        const repo3_to = document.getElementById("repo3_to");
        const repo3_btn = document.getElementById("repo3");

        repo3_btn.onclick = () => compareDates(repo3_from, repo3_to);

        // actions for report #4
        const repo4_from = document.getElementById("repo4_from");
        const repo4_to = document.getElementById("repo4_to");
        const repo4_btn = document.getElementById("repo4");
        const repo4_plot = document.getElementById("repo4-plot");
        const repo4_type = document.getElementById("repo4-type");

        repo4_btn.onclick = () => {
            // compare dates
            compareDates(repo4_from, repo4_to);

            // check field plot is empty
            if (repo4_plot.selectedIndex == 0) {
                alert("Выберите участок");
                return false;
            }

            // check field type is empty
            if (repo4_type.selectedIndex == 0) {
                alert("Выберите тип заявки");
                return false;
            }
        };

        // actions for report #5
        const repo5_from = document.getElementById("repo5_from");
        const repo5_to = document.getElementById("repo5_to");
        const repo5_btn = document.getElementById("repo5");
        const repo5_home = document.getElementById("repo5-home");
        const repo5_type = document.getElementById("repo5-type");

        repo5_btn.onclick = () => {
            // compare dates
            compareDates(repo5_from, repo5_to);

            // check field plot is empty
            if (repo5_home.selectedIndex == 0) {
                alert("Выберите адрес");
                return false;
            }

            // check field type is empty
            if (repo5_type.selectedIndex == 0) {
                alert("Выберите тип заявки");
                return false;
            }
        };

        // plus day
        function plusDay(d1, d2) {
            let date = new Date(d1.value);
            date.setDate(date.getDate() + 1);
            d2.valueAsDate = date;
        }

        // minus day
        function minusDay(d1, d2) {
            let date = new Date(d2.value);
            date.setDate(date.getDate() - 1);
            d1.valueAsDate = date;
        }

        // compare dates
        function compareDates(d1, d2) {
            let from = new Date(d1.value);
            let to = new Date(d2.value);

            if (from > to) {
                alert(
                    "Дата начала периода должно быть датой меньше дате конца периода"
                );
                return false;
            }
        }
    }
});
