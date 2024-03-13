<?php
    $host="localhost";
    $user="root";
    $pass="";
    $bd="db_ingles2";

    $conexion= new mysqli($host,$user,$pass,$bd);
    $conexion->set_charset("utf8");
    if (!$conexion) {
        throw new Exception('Error en la conexion');
    }
    ?>
