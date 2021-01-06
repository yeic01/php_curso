<?php   session_start();

require 'config.php';
require '../functions.php';

comprobarSesion();

$conexion = conexion($db_config);

if(!$conexion){
    header('Location: ../error.php');
}

// print_r($_FILES);


if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)){
    $titulo = limpiardatos($_POST['titulo']);
    $extracto = limpiardatos($_POST['extracto']);
    $articulo = limpiardatos($_POST['articulo']);
    $foto = @getimagesize($_FILES['foto']['tmp_name']);
    if($foto !== false){
        $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['foto']['name'];
        move_uploaded_file($foto, $archivo_subido);
        $statement = $conexion->prepare('
            INSERT INTO articulos (titulo, extracto, texto, thumb)
            VALUES(:titulo, :extracto, :texto, :thumb)
        ');


        $statement->execute(array(
            ':titulo' => $titulo,
            ':extracto' => $extracto,
            ':texto' => $articulo,
            ':thumb' => $_FILES['foto']['name']
        ));

        // print_r($titulo);
        // print_r($extracto);
        // print_r($articulo);
        // print_r($fotoa);

        header('Location:' . RUTA . 'admin');
    }else{
        header('Location:' . RUTA . 'error.php');
    }
}



require '../views/nuevo.view.php';
?>