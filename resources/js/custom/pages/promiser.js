$(document).ready(function() {
    // wrapper
    const wprom = document.getElementById("promiser-wrap");

    if (wprom) {

        $("#promiser-save").on("click", e => {

            let off = new Date($("#promiser-off").val()); 
            let on  = new Date($("#promiser-on").val()); 

            if (off > on) {
                alert(
                    "Дата отключения не должна быть позже даты подключения"
                );
                return false;
            }

        });

    }

});
