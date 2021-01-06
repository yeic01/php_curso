<?php 
    require_once 'ClassOperacion.php';

    //no recibe nada porque no tiene constructor
    $obj = new Calcular();
    $raiz = $obj->raizCuadrada(4);
    echo "La raiz es: ",$raiz;

    echo "<br><br>";

    $potencia = $obj->potencia(2,4);
    echo "La potencia es: ",$potencia;
    
    echo "<br><br>";

    $ope = $obj->op_basica(2,2,"*");
    echo "La operacion es: ",$ope;




?>