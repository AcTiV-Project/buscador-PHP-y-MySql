<?php require_once '../php/conexion.php' ?>
<?php require_once '../php/main.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="buscar.php" method="POST">
            <input type="text" name="consulta" placeholder="Buscar...">
            <input type="submit" name="busqueda" value="Buscar">
        </form>


        <?php
            $resultado = buscar($conexion, $_POST['consulta']);
            
            if(!empty($resultado) && mysqli_num_rows($resultado) >=1):
                while($ver = mysqli_fetch_array($resultado)):
        ?>
        
        <h1><?=$ver['nombre']?></h1>

        <?php 
                endwhile; 
            else:
        ?>

        <h1>No hay Datos que coincidan con tu busqueda</h1>


        <?php endif ?>

    </div>
</body>
</html>