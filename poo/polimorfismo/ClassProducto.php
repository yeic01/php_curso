<?php  

    class Producto{
        public $strDescripcion;
        public $fltPrecio;
        protected $intStock_min = 10;
        protected $srtStatus ="Activo";

        public function __construct(string $descripcion, float $precio)
        {
            $this->strDescripcion = $descripcion;
            $this->fltPrecio = $precio;
        }


        public function getInfoProdcuto(){
            $arrProducto= array(
                'Descripcion' => $this->strDescripcion,
                'Precio' => $this->fltPrecio,
                'Stock' =>$this->intStock_min,
                'status' => $this->srtStatus
            );

            return $arrProducto;
        }
    }
?>