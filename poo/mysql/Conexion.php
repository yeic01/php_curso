<?php 
    class Conexion{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $dbname = "db-sistema";
        private $connect;

        public function __construct()
        {
            $connectionString = "mysql:host=".$this->host.";dbname=". $this->dbname.";charset-utf8";
            try{
                $this->connect = new PDO($connectionString, $this->user,$this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //echo "ok";

            }catch(Exception $e){
                $this->connect = "Error de conexión";
                echo "Error de Conexión: ". $e->getMessage(); 
            }      

        }

        public function connect(){
            return $this->connect;
        }
    }

?>