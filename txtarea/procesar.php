<?php

$nombre = $_POST['txtNombre'];
$correo = $_POST['txtCorreo'];
$mensaje = $_POST['txtMensaje'];
//print $nombre;
//print $correo;
//print $mensaje;
if ($nombre == true || $correo == true || $mensaje == true) {
    print "<table border = '1'>
    <thead>
    <tr>
    <th style='margin: 10px'>NOMBRE</th>
    <th style='margin: 10px'>CORREO</th>
    <th style='margin: 10px'>MESNSAJE</th>
    </tr>
    </thead>
    
    <tbody>
    <tr>
    <td style='margin: 10px'>$nombre</td>
    <td style='margin: 10px'>$correo</td>
    <td style='text-align: justify; padding: 10px; margin: 10px'>$mensaje</td>

    </tr>
    </tbody>
    
    </table>";
}
?>
