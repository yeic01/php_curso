<?php 
    function __autoload($class){
        require_once $class.".php";
        var_dump($class.".php");
    }

    spl_autoload_register('__autoload');

?>