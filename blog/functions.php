 <?php       
    
    function conexion($db_config){
        try{
            $conexion = new PDO('mysql:host=localhost;dbname='. $db_config['dbname'], $db_config['user'], $db_config['pass'] );
            return $conexion;
            
    
        }catch(Exception $e){
            return false;
        }
    
    }


    function limpiardatos($datos){
        $datos = trim($datos);
        $datos = stripcslashes($datos);
        $datos = htmlspecialchars($datos);
        return $datos;
    }

    function pagina_actual(){
        return isset($_GET['id']) ? (int)$_GET['id'] : 1;
    }


    function getpost($postporpagina, $conexion){
        $inicio = (pagina_actual() > 1) ? pagina_actual() * $postporpagina - $postporpagina : 0;
        $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos ORDER BY fecha DESC LIMIT $inicio, $postporpagina");
        $sentencia->execute();
        return $sentencia->fetchAll();
    }


    function numero_paginas($postporpagina, $conexion){
        $totalArticulos = $conexion->query("SELECT FOUND_ROWS() AS total");
        $totalArticulos = $totalArticulos->fetch()['total'];
        $numeroPagina = ceil($totalArticulos / $postporpagina);
        return $numeroPagina;

    }
    

    function id_articulo($id){
        return (int)limpiardatos($id);
    }


    function obtener_post_por_id($conexion, $id){
        $sentencia = $conexion->prepare("SELECT * FROM articulos WHERE id = :id");
        $sentencia->execute(array(':id' => $id));
        $sentencia = $sentencia->fetch();
        return ($sentencia) ? $sentencia : false;

        // otra forma de hacerlo
        // $sentencia = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
        // $sentencia = $sentencia->fetchAll();
        // return ($sentencia) ? $sentencia : false;

    }

    function fecha($fecha){
        $timestamp = strtotime($fecha);
        $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

        $dia = date('d', $timestamp);
        $mes = date('m', $timestamp) - 1;
        $ano = date('Y', $timestamp);

        $fecha = "$dia de " . $meses[$mes] . " del $ano";
        return $fecha;
    }


    function comprobarSesion(){
        if (!isset($_SESSION['admin']) ){
            header('Location:' . RUTA );
        }
    }
    
 ?> 