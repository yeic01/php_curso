<?php 

require_once '../autoload.php';
use Controllers\Cliente;
use Controllers\Empleado;
use Controllers\Persona;


$objEmpleado = new Empleado(80831, "Cloe", 2, "supervisora");
$objEmpleado->setPuesto("supervisora");


echo $objEmpleado->getDatosPersonales();
echo "Puesto: " . $objEmpleado->getPuesto();

echo "<br><br>";

$objCliente = new Cliente(80831, "Cloe nueva", 12, "supervisora");
$objCliente->setCredito(1.2);

echo $objCliente->getDatosPersonales();
echo "Creditos: " . $objCliente->getCredito();

echo "<hr>";
echo "<br>";

$objPersona = new Persona();
echo $objPersona -> saludar();


?>