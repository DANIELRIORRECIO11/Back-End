$(document).ready(function () {
    $("form").submit(function (e) {
        e.preventDefault(); // Evita el envío normal del formulario

        var edad = $("input[name='edad']").val();

        $.ajax({
            type: "POST",
            url: "php/puntoCuatro.php",
            data: {
                edad: edad,
            },
            success: function (response) {
                $("#resultModal .modal-body").text( response);
                $("#resultModal").modal("show");
            }
        });
    });
});