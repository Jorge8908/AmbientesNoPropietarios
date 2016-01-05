$(document).ready(function () {


    $('.ocultar').on('click', function (event) {
        event.preventDefault();
        $('#elemento' + $(this).attr('target')).hide();
    });
    $("#btn").on("click", function () {

        $('.intro').hide(); //muestro mediante clase
    });


});