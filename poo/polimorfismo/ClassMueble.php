<?php  
    require_once  'ClassProducto.php';

    class Mueble extends Producto{
        public $strColor;
        public $strMaterial;
        public $srtStatus = "Agotado";

        public function __construct(string $strDescripcion, float $fltPrecio, string $strColor, string $strMaterial)
        {
            parent::__construct($strDescripcion, $fltPrecio);
            $this->strColor = $strColor;
            $this->strMaterial = $strMaterial;
        }

        public function getInfoProdcuto(){
            $arrProducto= array(
                'Descripcion' => $this->strDescripcion,
                'Precio' => $this->fltPrecio,
                'Stock' =>$this->intStock_min,
                'status' => $this->srtStatus,
                'color' => $this->strColor,
                'Mateial' => $this->strMaterial
            );

            return $arrProducto;
        }





    }

?>