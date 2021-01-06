<?php 
$errores ="";
$enviado ="";

if(isset($_POST['submit' ])){
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if(!empty($nombre)){
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    }else{
        $errores .= 'Por favor ingrese un nombre </br>';
    }

    if(!empty($correo)){
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){    
             $errores .= 'Por favor ingrese un correo valido </br>';
        }

    }else{
        $errores .= 'Por favor ingrese un correo </br>';
    }

    if(!empty($mensaje)){
        $mensaje = trim($mensaje);
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = stripslashes($mensaje);
    }else{
        $errores .= 'Por favor ingrese un mensaje </br>';
    }

    if(!$errores){
        $enviar_a =  'jacob@autorun.tv';
        $asunto_a =  'correo enviado desde mi pagina ';
        $mensaje_a =  'De ' ."\n".$mensaje. "\n";
        $mensaje_a .= 'Correo'."\n". $correo.PHP_EOL;
        $mensaje_a .= 'Mensaje' ."\n". $mensaje;
 
        mail($enviar_a , $asunto_a, $mensaje_a);
        $enviado = true;

    }

}


require 'index.view.php';




?>