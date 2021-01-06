<?php 
    trait Carrito{
        public $strProducto;
        public $intCantidad;

        public function setCarrito(String $producto, String $cantidad){
            $this->strProducto = $producto;
            $this->intCantidad = $cantidad;
        }

        abstract function getCarrito();
    }
?>