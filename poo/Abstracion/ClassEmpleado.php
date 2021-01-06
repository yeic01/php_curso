<?php 
    require_once 'ClassPersonal.php';

    class Empleado extends Persona
    {
        protected $strPuesto;

        public function __construct(int $intNit, string $strNombre, int $intEdad)
        {
            parent::__construct($intNit, $strNombre, $intEdad);
            
        }

        public function getPuesto():string{
            return $this->strPuesto;
        }

        public function setPuesto($strPuesto){
            $this->strPuesto = $strPuesto;
        }

        //se implementa el metodo abstracto de la clase persona
        public function getDatosPersonales(){
            $datos = "
                <h2>Datos Personales</h2>
                NIT: {$this->intNit}<br>
                Nombre: {$this->strNombre}<br>
                Edad: {$this->intEdad}<br>
            ";

            return $datos;
        }

        public function setMensaje(String $mensaje){
            $this->mensaje = $mensaje;
        }

        public function getMensaje():String{
            return $this->mensaje." " . $this->strNombre;
        }
    }
?>