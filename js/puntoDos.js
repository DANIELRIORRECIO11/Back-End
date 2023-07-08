$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault(); // Evita el envío normal del formulario

        var num1 = $("input[name='edad']").val();
  
        $.ajax({
            type: "POST",
            url: "php/puntoDos.php",
            data: {
                num1: num1
            },
            success: function (response) {
                $("#resultModal .modal-body").text(response);
                $("#resultModal").modal("show");
            }
        });
    });
});