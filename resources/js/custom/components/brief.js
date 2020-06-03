$(document).ready(function() {
    
    $('#brief-print').on('click', e => {
        e.preventDefault();

        window.print();
    })
});