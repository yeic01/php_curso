<?php 
    require 'admin/config.php';
    require 'functions.php';
    
   $conexion = conexion($db_config);
   if (!$conexion) {
       header('Location: error.php');
   }


   if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
       $busqueda = limpiardatos($_GET['busqueda']);
       $statement = $conexion->prepare("SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda");
       $statement ->execute(array(':busqueda' => "%$busqueda%",));
       $resultados = $statement->fetchAll();

       if(empty($resultados)){
           $titulo = 'No se encontraron artiuclos con el resultado' . $busqueda;
       }else{
           $titulo = 'Resultados de la busqueda: ' . $busqueda;
       }

   }else{
       header('Locations:'. RUTA .'/index.php');
   }




    require 'views/buscar.view.php';





?>