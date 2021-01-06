<?php 
    require_once 'ClassTienda.php';

    $producto = "teclado";
    $precio = 110;
    $stock =10;
    $cantidad = 2;

    $obj = new Tienda();

    $obj -> setProducuto($producto, $precio, $stock);
    echo $obj -> getProdcuto();

    echo "<br><br>";

    $obj -> setCarrito($producto, $cantidad);
    $obj -> setStock($cantidad);
    echo "<br><br>"; 
    echo $obj -> getProdcuto();

    echo $obj -> getCarrito();

?>