<html
    <head>
    <title>TODO supply a title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        input[type=text], input[type=submit] {
            text-align: center;
            border-radius: 10px;
            border: 2px solid blue;
        }

    </style>
</head>
<body>
    <?php
    $resultado = 0;
    $numero1 = "";
    $numero2 = "";
    $mensaje = "";
    if (isset($_POST['accion'])) {
        try {
            $numero1 = $_POST['txtNumero1'];
            $numero2 = $_POST['txtNumero2'];

            if (isset($_POST['radOperacion']) && is_numeric($numero1) && is_numeric($numero2)) {
                $operacion = $_POST['radOperacion'];
                switch ($operacion) {
                    case '+': $resultado = $numero1 + $numero2;
                        break;
                    case '-': $resultado = $numero1 - $numero2;
                        break;
                    case '*': $resultado = $numero1 * $numero2;
                        break;
                    case '/': $resultado = $numero1 / $numero2;
                        break;
                    default: print "alert('ENTRADA INCORRECTA')";
                }
            } else {
                throw new Exception('Entrada Incorrecta');
            }
        } catch (Exception $e) {
            $mensaje = $e->getMessage();
        }
    }
    ?>




<center>
    <h3>OPERACION ARITMETICA</h3>
    <form action="" method="post">
        <input type="text" name="txtNumero1" placeholder="Número 1" value="<?php echo $numero1 ?>"/>
        <input type="text" name="txtNumero2" placeholder="Número 2" value="<?php echo $numero2 ?>"/>
        <input type="text" name="txtResultado" value="<?php echo $resultado ?>" placeholder="Resultado" readonly />
        <br><br>
        <input type="radio" name="radOperacion" value="+" />Sumar
        <input type="radio" name="radOperacion" value="-" />Restar
        <input type="radio" name="radOperacion" value="*" />Multiplicar
        <input type="radio" name="radOperacion" value="/" />Dividir
        <br><br>
        <input type="text" name="txtMensaje" placeholder="Mensaje" value="<?php echo $mensaje ?>"/>
        <br><br>
        <input type="submit" value="Enviar" name="accion" />
    </form>
</center>
</body>
</html>
