<?php 

require 'funciones.php';


$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1);
$fotos_por_pagina = 8;
$inicio = ($pagina_actual > 1 ) ? ($pagina_actual * $fotos_por_pagina - $fotos_por_pagina) : 0;

$conexion = conexiondb('galeria', 'root', '');

if(!$conexion){
    die();
}

$statement = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos LIMIT $inicio, $fotos_por_pagina");
$statement->execute();
$fotos = $statement->fetchAll();


if(!$fotos){
    header('Location: index.php');
}

$totalfotos = $conexion->query(("SELECT FOUND_ROWS() AS total"));
$totalfotos = $totalfotos->fetch()['total'];
//echo $totalfotos;

$numeroPagina = ceil($totalfotos / $fotos_por_pagina);

    // echo "<pre>";
    // echo var_dump($resultados);
    // echo "</pre>";

require('views/index.view.php');

?>