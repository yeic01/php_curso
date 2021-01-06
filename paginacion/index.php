<?php 



try{
    $conexion = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
    //echo "conexion ok";

}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    die();
}

$pagina = isset($_GET['pagina'] ) ? (int)$_GET['pagina'] : 1;
$postPorPagina = 5;
$inicio = ($pagina > 1 ) ? ($pagina * $postPorPagina - $postPorPagina) : 0;

$articulos = $conexion->prepare("
SELECT SQL_CALC_FOUND_ROWS * FROM articulos 
LIMIT $inicio, $postPorPagina");

$articulos ->execute();
$articulos = $articulos->fetchAll(); 

// echo "<pre>"; 
// echo var_dump($articulos) ;
// echo "</pre>";

if(!$articulos){
     header('Location: index.php');
}


$totalArticulos = $conexion->query("SELECT FOUND_ROWS() as total");
$totalArticulos = $totalArticulos->fetch()['total'];

// echo $totalArticulos;
$numeroPagina = ceil($totalArticulos / $postPorPagina);
// echo $numeroPagina;


require('index.view.php');

?>