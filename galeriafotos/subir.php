<?php   
require 'funciones.php';
$conexion = conexiondb('galeria', 'root' , '');

if(!$conexion){
    //header('Location: error.php')
    die();
}

if($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES )){
    //validamos que recibiomos de la variables files
    // echo "<pre>";
    // echo var_dump($_FILES);
    // echo "</pre>";

    $check = @getimagesize($_FILES['foto']['tmp_name']);//guarda false si no tiene una imagen  @ parque no marque error de tipo notice
    if($check !== false){
        $carpeta_destino = 'fotos/';
        $archivo_subido = $carpeta_destino . $_FILES['foto']['name'];
        //echo $archivo_subido;
        move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subido );

        $statement = $conexion->prepare('
            INSERT INTO fotos (titulo, imagen, texto)
            VALUES (:titulo, :imagen, :texto)
        ');

        $statement->execute(array(
            ':titulo' => $_POST['titulo'],
            ':imagen' => $_FILES['foto']['name'],
            ':texto' => $_POST['texto']
        ));

        header('Location: index.php');
    } else{
        $error = "El Archivo no es una imagen o el archivo es muy pesado";
    }

}

require 'views/subir.view.php';

?>