<?php
session_start();

if($_SESSION){
    $nombre = $_SESSION['nombre'];
    echo "<h1>Hola " . $nombre . "</h1>";
    echo "<pre> ".var_dump($_SESSION) ."</pre>";
}else{
    echo "No has iniciado sesión";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1</title>
</head>
<body>
   <?php echo "Hola " . $nombre; ?>
    <br>
    <a href="cerrar.php">Cerrar sesion</a>
</body>
</html>