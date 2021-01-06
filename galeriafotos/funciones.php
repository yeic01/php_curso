<?php  

function conexiondb($dbname, $user, $pass ){
    try{
        $conexion = new PDO('mysql:host=localhost;dbname='. $dbname, $user, $pass);
        return $conexion;
    } catch(PDOException $e){
        return false;
    }

} 

?>