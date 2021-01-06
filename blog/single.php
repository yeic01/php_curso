<?php   
    require 'admin/config.php';
    require 'functions.php';

    $conexion = conexion($db_config);
    $id_articulo = id_articulo($_GET['id']);
    if (!$conexion) {
        header('Location: error.php');
    }


    if(empty($id_articulo)){
        header('Location: index.php');
    }

    $articulo = obtener_post_por_id($conexion, $id_articulo);
    // echo "<pre>";
    // echo var_dump($articulo);
    // echo "</pre>";


    if(!$articulo){
        header('Location: index.php');
    }
     




    require 'views/single.view.php';
 
 ?> 