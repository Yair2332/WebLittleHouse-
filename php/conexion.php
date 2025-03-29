<?php
    $servicio="localhost";
    $usuario="root";
    $contraseña="";
    $basededatos="WLH";

    $conexion= mysqli_connect($servicio,$usuario,$contraseña,$basededatos);

    if (!$conexion) {
        echo "error";
    }
?>