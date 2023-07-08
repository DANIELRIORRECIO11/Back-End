<?php
   
$edad = $_POST['num1'];
const limiteEdad = 18;
const edadMaxima = 100;
$mensaje = null;
$bandera = false;

if($edad >= edadMaxima){
    $mensaje = "Felicidades, eres una leyenda biblica!";
}else if ($edad >= limiteEdad) {
    $mensaje = "Eres mayor de edad";
}
else if (18 > $edad && 0 < $edad) {
    $mensaje = "Eres menor de edad";
}else{
    $mensaje = "Lo siento, no has nacido :(";
}

echo $mensaje;

?>

