$(document).ready(function() {
    // forms
    const forms = document.querySelectorAll(".bk-repo");
    const radio = document.querySelectorAll(".bk-radio");

    // repo buttons
    const repo2 = document.getElementById("repo2");
    const repo3 = document.getElementById("repo3");
    const repo4 = document.getElementById("repo4");
    const repo5 = document.getElementById("repo5");

    // added events for radiobuttons
    for (let rad of radio) {
        rad.addEventListener("click", e => {
            let ElemID = e.target.id;

            for (let form of forms) {
                let attr = form.dataset.id;
                if (attr == ElemID) {
                    form.classList.remove("bk-hidden");
                } else {
                    form.classList.add("bk-hidden");
                }
            }
        });
    }

    // actions for report #1
    const r1_from = document.getElementById("repo1_from");
    const r1_to = document.getElementById("repo1_to");

    // plus day
    r1_from.onchange = e => {
        var date = new Date(r1_from.value);
        date.setDate(date.getDate() + 1);
        r1_to.valueAsDate = date;
    };

    // minus day
    r1_to.onchange = e => {
        var date = new Date(r1_to.value);
        date.setDate(date.getDate() - 1);
        r1_from.valueAsDate = date;
    };

    // compare dates
    function compareDates(d1, d2) {
        let from = new Date(d1);
        let to = new Date(d2);

        if (from > to) {
            alert(
                "Дата начала периода должно быть датой меньше дате конца периода"
            );
        }
    }
});
