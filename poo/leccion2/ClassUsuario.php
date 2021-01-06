<?php  
    class Usuario{
        private $strNombre;
        private $strEmail;
        private $strTipo;
        private $strClave;
        protected $strFechaRegistro;
        static $strEstado = "Activo";


        function __construct(string $nombre, string $email, string $tipo)
        {
            $this ->strNombre = $nombre;
            $this ->strEmail = $email;
            $this ->strTipo = $tipo;
            //genera numeros aleatorios rand
            $this->strClave = rand();
            $this->strFechaRegistro = date('Y/m/d H:m:s');
        }

        public function getNombre():string{
            return $this->strNombre;
        }

        public function setNombre($nombre){
            $this->strNombre = $nombre;
        }

        public function getEmail():string{
            return $this->strEmail;
        }

        public function setEmail($email){
            $this->strNombre = $email;
        }

        public function getTipo():string{
            return $this->strTipo;
        }

        public function setTipo($tipo){
            $this->strNombre = $tipo;
        }

        public function getClave():int{
            return $this->strClave;
        }


        public function getProfile(){
            echo "Datos del usuario: " . "<br>";
            echo "Nombre: " . $this->strNombre . "<br>";
            echo "Email: " . $this->strEmail . "<br>";
            echo "Tipo: " . $this->strTipo . "<br>";
            echo "Fecha registro: " . $this->strFechaRegistro . "<br>";
            echo "Clave: " . $this->strClave . "<br>";
            echo "Estado: " . self::$strEstado . "<br>";
        }

        public function setCambiarClave(string $pass){
            $this->strClave = $pass;
        }

        
    }

?>