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
            <input type="submit" value="Buscar">
        </form>



    </div>
</body>
</html>