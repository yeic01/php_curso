<?php  
    require_once 'ClassUsuario.php';


    $objUsuario = new Usuario('jacob', 'jacob@mail.com', 'admin');
    $objAndrea = new Usuario('andre', 'andrea@mail.com', 'cliente');

    // Si son publicos los puedo acceder desde aqui
    // echo $objUsuario->strNombre."\n";
    // echo $objUsuario->strEmail."\n";
    // echo $objUsuario->strTipo."\n";

    //si son privados toca acceder desde el metodo get y set
    echo $objUsuario->getNombre();
    echo Usuario::$strEstado;

    echo "<br><br>";
    

    echo $objUsuario->getProfile();


    echo "<br><br>";

    echo $objAndrea->getProfile();

    echo $objAndrea->setCambiarClave("NuevaClave");

    echo "<br><br>";


    echo $objAndrea->getProfile();



?>