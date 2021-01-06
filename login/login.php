<?php  session_start();
$errores='';
if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING) ;
    $password = $_POST['password'];
    $password = hash('sha512', $password);

    //echo $usuario ." - " . $password;

    try{ 
        $conexion = new PDO('mysql:host=localhost;dbname=curso_login', 'root', '');
        //echo "conexion ok";
    } catch(PDOException $e){
        echo "Error " . $e->getMessage(); 
    }
    //se valida que el usuario este registrado
    $statement = $conexion->prepare('SELECT * FROM usuarios WHERE user = :usuario AND pass = :password');
    $statement->execute(array(':usuario' => $usuario, ':password' => $password));
    $resultado = $statement->fetch(); 

    // echo "<pre>";
    //     var_dump($resultado);
    // echo "</pre>";
    if($resultado  != false){
        $_SESSION['usuario'] = $usuario;
        header ('Location: index.php');
        //echo "datos correctos";
    }else{
        $errores .= "<li> El usuario o la contraseña no coinciden</li>";
    }

}



require 'views/login.view.php';

?>