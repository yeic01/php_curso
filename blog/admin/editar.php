<?php   session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conexion = conexion($db_config);

if(!$conexion){
    header('Location: ../error.php');
}

// print_r($_FILES);


if($_SERVER['REQUEST_METHOD'] == 'POST' ){
    $id = limpiardatos($_POST['id']);
    $titulo = limpiardatos($_POST['titulo']);
    $extracto = limpiardatos($_POST['extracto']);
    $articulo = $_POST['articulo'];
    $thumb_guardada = $_POST['thumb-guardada'];
    $thumb = $_FILES['thumb'];

    if(empty($thumb['name'])){
        $thumb = $thumb_guardada;
    }else{
        $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
        move_uploaded_file($foto, $archivo_subido);
        $thumb = $_FILES['thumb']['name'];
    }

    $statement = $conexion->prepare('
        UPDATE articulos SET titulo = :titulo, extracto = :extracto, texto = :texto, thumb = :thumb  WHERE id = :id
    ');

    $statement->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $articulo,
        ':thumb' => $thumb,
        ':id' =>  $id
    ));


    header('Location:' . RUTA . 'admin');
    
}else{
    $id_articulo = id_articulo($_GET['id']);
    if(empty($id_articulo)){
        header('Location:'. RUTA . '/admin');
    }

     $post = obtener_post_por_id($conexion, $id_articulo);

     if(empty($post)){
        header('Location:'. RUTA . '/admin');
    }

    //print_r($post);
    



}



require '../views/editar.view.php';
?>