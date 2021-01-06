<?php 
    session_start();

    

    if (isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING) ;
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        //echo $usuario . $password . $password2;

        $errores = '';

        if(empty($usuario) or empty($password) or empty($password2)){
            $errores .= '<li>Por favor rellena los datos correctamente</li>';
        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=curso_login', 'root', '');
                //echo "conexion ok";
            } catch(PDOException $e){
                echo "Error " . $e->getMessage(); 
            }
            //se valida el usuario que no este registrado
            $statement = $conexion->prepare('SELECT * FROM usuarios WHERE user = :usuario LIMIT 1 ');
            $statement->execute(array(':usuario' => $usuario));
            $resultado = $statement->fetch();


            //  echo "<pre>";
            //      var_dump($resultado);
            // echo "</pre>";

            if($resultado != false){
                $errores .= "<li>El nombre de usuario ya existe</li>";
                
            }

            $password =  hash('sha512', $password);
            $password2 =  hash('sha512', $password2);

            if($password != $password2){
                $errores .= "<li>La Contraseña no coincide intentelo nuevamente</li>" ;
            }

        }

        if($errores == ''){
            $statement = $conexion->prepare('INSERT INTO usuarios (id, user, pass) VALUES(null, :usuario, :password)');
            $statement->execute(array(':usuario' => $usuario, ':password' => $password));
            header('Location: login.php'); 
        }
        
        
    }

    require 'views/registrate.view.php';
    

?>  