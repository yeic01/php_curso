<?php 
    require_once 'autoload.php';

    class Usuario extends Conexion{
        private $strNombre;
        private $intTelefono;
        private $strEmail;
        private $conexion;

        public function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->connect();
            
        }

        public function insertUser(String $nombre,int $telefno, String $mail){
            $this->strNombre = $nombre;
            $this->strTelefono = $telefno;
            $this->strEmail = $mail;

            $sql = "INSERT INTO usuario(nombre, telefono, email) VALUES (?,?,?)";
            $insert = $this->conexion->prepare($sql);
            $arrData = array (
                $this->strNombre = $nombre,
                $this->strTelefono = $telefno,
                $this->strEmail = $mail
            );
            $resInser = $insert->execute($arrData);
            $idinser = $this->conexion->lastInsertId();
            return $idinser;

        }


        public function getUser(){
            $sql = "SELECT * FROM usuario";
            $execute = $this->conexion->query($sql);
            $request = $execute -> fetchAll(PDO::FETCH_ASSOC);

            return $request;

        }


        public function updateUser(int $id, String $nombre,int $telefno, String $mail){

            $this->strNombre = $nombre;
            $this->strTelefono = $telefno;
            $this->strEmail = $mail;

            $sql = "UPDATE usuario SET nombre=?, telefono=?, email=? WHERE id=$id";
            $update = $this->conexion-> prepare($sql);
            $arrayData = array(
                $this->strNombre = $nombre,
                $this->strTelefono = $telefno,
                $this->strEmail = $mail
            );
            $resUpdate = $update->execute($arrayData);
            return $resUpdate;
        }

        public function getOnlyUser($id){
            $sql = "SELECT * FROM usuario WHERE id = $id";
            $execute = $this->conexion->query($sql);
            $request = $execute -> fetch(PDO::FETCH_ASSOC);

            return $request;
        }


        public function deleteUser($id){
            $sql = "DELETE FROM usuario WHERE id = ?";
            $dele = array ($id);
            $delete = $this->conexion->prepare($sql);
            $result = $delete->execute($dele);
            return $result;
        }

    }

?>