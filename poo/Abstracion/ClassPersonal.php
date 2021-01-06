<?php 
    abstract class Persona{
        public $intNit;
        public $strNombre;
        public $intEdad;
        public $mensaje;

        function __construct(int $intNit, string $strNombre, int $intEdad)
        {
            $this->intNit = $intNit;
            $this->strNombre = $strNombre;
            $this->intEdad = $intEdad;

        }

        abstract public function getDatosPersonales();
        abstract public function setMensaje(String $mensaje);
        abstract public function getMensaje():String;
    }
?>