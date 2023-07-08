<?php
   
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];
$mensaje = null;
$bandera = false;

switch ($operator) {
    case '+':
        $result = $num1 + $num2;
        break;
    case '-':
        $result = $num1 - $num2;
        break;
    case '*':
        $result = $num1 * $num2;
        break;
    case '/':
        if($num2 != 0){
            $result = $num1 / $num2;
        }else{
            $mensaje = "La division entre cero no esta definida";
            $bandera = true;
        }       
        break;
    default:
        echo "Operador no válido";
}

if($bandera){
    echo $mensaje;
}else{
    echo $result;
}
?>

