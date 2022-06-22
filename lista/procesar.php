<?php

$produc = array("arroz", "leche", "azúcar", "yogurt");
$precio = array("1.5", "0.8", "2.2", "1.3");
$pagar =0;


$producto = $_POST['lstProductos'];
$cantidad = $_POST['lstCantidad'];


for ($i = 0; $i < count($produc); $i++) {
    if (strcasecmp($producto, $produc[$i]) == 0) {
        $pagar = $precio[$i] * $cantidad;
        break;
 
        }
}
     print "<p style='color: #0000FF;'>EL TOTAL A PAGAR ES: $pagar</p>";
?>


//////otra solucion 


<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h3>SELECCIONE EL PRODUCTO Y LA CANTIDAD A COMPRAR</h3><br>
        <form action="procesar.php" method="post"> 

            <select name="lstProductos">
                <option value="Arroz">Arroz</option>
                <option value="Leche">Leche</option>
                <option value="Azúcar">Azúcar</option>
                <option value="Yogurt">Yogurt</option>
            </select>

            <select name="lstCantidad">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>

            <input type="submit" value="Enviar" name="accion" />   
        </form>
    </body>
</html>
?>
