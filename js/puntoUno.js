$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault(); // Evita el envío normal del formulario

        var num1 = $("input[name='num1']").val();
        var num2 = $("input[name='num2']").val();
        var operator = $("select[name='operator']").val();

        $.ajax({
            type: "POST",
            url: "php/puntoUno.php",
            data: {
                num1: num1,
                num2: num2,
                operator: operator
            },
            success: function (response) {
                $("#resultModal .modal-body").text("El resultado es: " + response);
                $("#resultModal").modal("show");
            }
        });
    });
});