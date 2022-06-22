<?php

$numero1 = $_POST['txtNumero1'];
$numero2 = $_POST['txtNumero2'];
$operacion = $_POST['radOperacion'];
$resultado = 0;

switch ($operacion) {
    case '+': $resultado = $numero1 + $numero2;
        break;
    case '-': $resultado = $numero1 - $numero2;
        break;
    case '*': $resultado = $numero1 * $numero2;
        break;
    case '/': $resultado = $numero1 / $numero2;
        break;
}
print "Resultado: " . $resultado. '<br>';


print $numero1 ;
print $operacion ;
print $numero2 ;

?>

