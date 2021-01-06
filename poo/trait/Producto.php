<?php 
    trait Producto{
        public $strProducto;
        public $fltPrecio;
        public $intStock;

        public function setProducuto($producto, $precio,$stock){
            $this->strProducto = $producto;
            $this->fltPrecio = $precio;
            $this->intStock = $stock;
        }

        public function getProdcuto(){
            $strInfo  = "
                Producto: {$this->strProducto}<br>
                Precio: {$this->fltPrecio}<br>
                Strock: {$this->intStock}<br><br>
            ";

            return $strInfo;
        }

        public function setStock (int $cantidad){
            $this->intStock = $this->intStock - $cantidad;
        }
    }

?>