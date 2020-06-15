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
