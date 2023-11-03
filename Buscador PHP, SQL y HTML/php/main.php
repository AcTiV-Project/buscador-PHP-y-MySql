<?php
    include("conexion.php");
    
    function buscar($conexion, $consulta){
        if(isset($_POST['consulta'])){

            $consulta = $_POST['consulta'];

            $sql = "SELECT * FROM usuario WHERE cedula LIKE '%$consulta%'";
            $resultado = mysqli_query($conexion, $sql);

            $dato = false; 

            if($resultado && mysqli_num_rows($resultado) >=1){
                $dato = $resultado;
            }

            return $dato;
        }
    }


?>