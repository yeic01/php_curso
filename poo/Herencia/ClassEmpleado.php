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
    }
?>