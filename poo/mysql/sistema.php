<?php 
    require_once 'autoload.php';

    $objUsuario = new Usuario();

    // $insert = $objUsuario->insertUser("Jacob2", 123456, "Corroe2@email.com");
    // echo $insert;


    //consutla datos
    // $consulta = $objUsuario->getUser();
    // echo "<pre>";
    // var_dump($consulta); 
    // echo "</pre>";


    //actualizar datos
    // $update = $objUsuario->updateUser(2, "juan", 78946, "juan@email.com");
    // var_dump($update);

    //obtener un solo dato
    // $onlyuser = $objUsuario->getOnlyUser(2);
    // var_dump($onlyuser);


    //deleteusuario
    $delete= $objUsuario->deleteUser(2);
    var_dump($delete);

?>