<?php
    $servidor = "localhost";
    $usuario = "root";
    $constraseña = "";
    $db = "midata";

    $conexion = mysqli_connect($servidor, $usuario, $constraseña, $db);

    if($conexion->connect_errno){
        //echo "Error";
    }
    else{ 
        //echo "Conexion Exitosa!!";
    }

?>