<?php 
    namespace Controllers;
    require_once '../autoload.php';
    use Models\Persona;

    class Cliente extends Persona
    {
        protected $fltCredito;

        public function __construct(int $intNit, string $strNombre, int $intEdad)
        {
            parent::__construct($intNit, $strNombre, $intEdad);
        }

        public function getCredito():float{
            return $this->fltCredito;
        }

        public function setCredito($fltCredito){
            $this->fltCredito = $fltCredito;
        }

        public function getMensaje():string{
            return "null";
        }

        public function setMensaje($strPuesto){
            
        }
    }
?>