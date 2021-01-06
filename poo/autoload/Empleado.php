<?php 
    //require_once 'Personal.php';
    require_once 'autoload.php';

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

        public function getMensaje():string{
            return "null";
        }

        public function setMensaje($strPuesto){
            
        }
    }
?>