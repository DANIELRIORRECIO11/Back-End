<?php
   
$edad = $_POST['edad'];
$mensaje = null;
$bandera = false;

$f_n = new DateTime($_POST['edad']);       
$date2 = new DateTime(date("y-m-d"));
$diff = $f_n->diff($date2);
$edad_actual = $diff->y;
$edad_meses = $diff->m;
$edad_dias = $diff->d;

if($edad_actual >= 100){
    $mensaje = "Usted tiene ".$edad_actual." años ".$edad_meses." meses  y ".$edad_dias." dias \n  ¡Felicidades, eres una leyenda andante bíblica!";
} else{
    $mensaje = "Usted tiene ".$edad_actual." años ".$edad_meses." meses  y ".$edad_dias." dias";
}

echo $mensaje;

?>

