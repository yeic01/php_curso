$conexion = conexion($db_config);
$listrol = $conexion->prepare("SELECT * FROM rol");
$listrol->execute();
$listrol = $listrol->fetchAll();


$alert ="";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = limpiardatos($_POST['id']);
    $nombre = limpiardatos($_POST['nombre']);
    $correo = limpiardatos($_POST['email']);
    $usuario = limpiardatos($_POST['usuario']);
    $pass = md5(limpiardatos($_POST['password']));
    $pass_temp = md5(limpiardatos($_POST['password_temp']));
    $rol = limpiardatos($_POST['rol']);
    $rol_temp = limpiardatos($_POST['rol_temp']);
    
    if(empty($pass) || empty($rol)){
        $pass = $pass_temp;
        $rol = $rol_temp;
    }
    
//     $statement = $conexion->prepare("SELECT * FROM usuario WHERE (usuario = :usuario AND idusuario != :id) OR (correo = :correo AND idusuario != :id)");
//     $statement->execute(array(
//         ':usuario' => $usuario, 
//         ':id' => $id,
//         ':correo' => $correo,
//         ':id' => $id
//     ));
//     $statement = $statement->fetch();
    
//     //var_dump($statement);
    
//     if($statement > 0){
//         $alert = "<p class='msg-error'>El usuario o correo ya se encuentran registrados.</p>";
//     } else{
//         echo "el va ser actualizado";
//         //consulta update usuarios
        $statement = $conexion->prepare(
            'UPDATE usuario SET nombre = :nombre, correo = :correo, usuario = :usuario, clave = :pass, rol = :rol  WHERE idusuario = :id' );
        $statement->execute(array(':nombre' => $nombre, ':correo' => $correo, 'usuario' => $usuario, ':pass' => $pass, ':rol' => $rol, ':id' => $id ));
        header('Location:lista_usuarios.php');
        
    //}
   
    } else{
        //consulta traer datos usuario al formulario
        $id = id_usuario($_GET["id"]);
        
        $sentencia = $conexion->prepare("SELECT u.idusuario, u.nombre, u.correo, u.usuario, u.clave,u.rol AS idrol, r.rol AS rol FROM usuario u INNER JOIN rol r ON u.rol = r.idrol WHERE idusuario = :id");
        $sentencia->execute(array(':id' => $id));
        $sentencia = $sentencia->fetch();
        
//         echo "<pre>";
//         var_dump($sentencia);
//         echo "</pre>";
        
        $option ="";
        if($sentencia[5] == 1 || $sentencia[5] == 2 ||$sentencia[5] == 3){
            $option = "<option style='display: none;' value=" . $sentencia[5] .">" . $sentencia[6] ."</option>";
        }
        
        if(empty($sentencia)){
            header('Location:lista_usuarios.php');
        }
        
        
     }