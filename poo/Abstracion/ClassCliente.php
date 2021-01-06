<?php 
    require_once 'ClassPersonal.php';

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