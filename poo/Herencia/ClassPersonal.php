<?php 
    class Persona{
        public $intNit;
        public $strNombre;
        public $intEdad;

        function __construct(int $intNit, string $strNombre, int $intEdad)
        {
            $this->intNit = $intNit;
            $this->strNombre = $strNombre;
            $this->intEdad = $intEdad;

        }

        public function getDatosPersonales(){
            $datos = "
                <h2>Datos Personales</h2>
                NIT: {$this->intNit}<br>
                Nombre: {$this->strNombre}<br>
                Edad: {$this->intEdad}<br>
            ";

            return $datos;
        }
    }
?>