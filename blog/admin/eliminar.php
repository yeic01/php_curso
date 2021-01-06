<?php   session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conexion = conexion($db_config);

if(!$conexion){
    header('Location: ../error.php');
}


$id = limpiardatos($_GET['id']);

$statement = $conexion->prepare('DELETE FROM articulos WHERE id = :id;');
$statement->execute(array(
    ':id' =>  $id
));


header('Location:'. RUTA . '/admin');







?>