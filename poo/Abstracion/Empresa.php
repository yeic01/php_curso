<?php 
require_once 'ClassEmpleado.php';
require_once 'ClassCliente.php';


$objEmpleado = new Empleado(80831, "Cloe", 2, "supervisora");
$objEmpleado->setPuesto("supervisora");
$objEmpleado->setMensaje("Bienvenido Empleado");

echo $objEmpleado->getMensaje();
echo $objEmpleado->getDatosPersonales();
echo "Puesto: " . $objEmpleado->getPuesto();

echo "<br><br>";

$objCliente = new Cliente(80831, "Cloe nueva", 12, "supervisora");
$objCliente->setCredito(1.2);
$objCliente->setMensaje("Bienvenido Empleado");

echo "<br><br>";
echo $objCliente->getMensaje();
echo $objCliente->getDatosPersonales();
echo "Creditos: " . $objCliente->getCredito();


?>