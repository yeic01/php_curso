<?php 
session_start();
//index admin
require 'config.php';
require  '../functions.php';

$conexion = conexion($db_config);

//comprobar sesion
comprobarSesion();

if(!$conexion){
    header('Location: ../error.php');
}

//obtener post
$posts = getpost($blog_config['post_por_pagina'], $conexion);




 require '../views/admin_index.view.php';
 
?>