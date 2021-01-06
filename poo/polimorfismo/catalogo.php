<?php 
require 'ClassMesa.php';

$objeCama = new Producto("cama", 10500);
$arrInfoProducto = $objeCama->getInfoProdcuto();

echo "<pre>";
var_dump($arrInfoProducto);
echo "</pre>";


$objmueble = new Mueble("Closet", 10500, "cafe", "madera");
$arrInfoProducto = $objmueble->getInfoProdcuto();

echo "<pre>";
var_dump($arrInfoProducto);
echo "</pre>";


$objMesa = new Mesa("Mesa", 50000, "negra", "metal","redonda");
$arrInfoProducto = $objMesa->getInfoProdcuto();

echo "<pre>";
var_dump($arrInfoProducto);
echo "</pre>";

?>