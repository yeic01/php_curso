<?php
session_start();

$_SESSION['nombre'] = 'jacob';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Sesions</title>
</head>
<body>
    <h1>Pagina de inicio </h1>
    <a href="pagina1.php">Ir a la pagina 2</a>


    <a href="cerrar.php">Cerrar sesion</a>

    <br>
    <br>
    <br>
    <?php 
    
    echo $_SERVER['HTTP_HOST'] ."<br>";
    echo $_SERVER['SERVER_NAME'] . "<br>";
    echo $_SERVER['SERVER_ADDR'] . "<br>";
    echo $_SERVER['REMOTE_ADDR'] . "<br>";
    echo $_SERVER['REMOTE_HOST'] . "<br>";
    echo $_SERVER['REMOTE_PORT'] . "<br>";
    echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
    echo $_SERVER['SERVER_PORT'] . "<br>";
    echo $_SERVER['SCRIPT_NAME'] . "<br>";
    echo $_SERVER['SCRIPT_URI'] . "<br>";
    
    
    
    ?>
</body>
</html>