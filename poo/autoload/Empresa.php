<?php 
//require_once 'Empleado.php';
//require_once 'Cliente.php';
require_once 'autoload.php';

$objEmpleado = new Empleado(80831, "Cloe", 2, "supervisora");
$objEmpleado->setPuesto("supervisora");


echo $objEmpleado->getDatosPersonales();
echo "Puesto: " . $objEmpleado->getPuesto();

echo "<br><br>";

$objCliente = new Cliente(80831, "Cloe nueva", 12, "supervisora");
$objCliente->setCredito(1.2);

echo $objCliente->getDatosPersonales();
echo "Creditos: " . $objCliente->getCredito();


?>