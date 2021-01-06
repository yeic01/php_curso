<?php 
    require 'ClassMueble.php';
    class Mesa extends Mueble{
        private $strForma = "";
        protected $strTamanio;
        public $srtStatus = "Activo";

        public function __construct(string $strDescripcion, float $fltPrecio, string $strColor, string $strMaterial, string $strTamanio)
        {
            parent::__construct($strDescripcion, $fltPrecio, $strColor, $strMaterial);
            $this->strTamanio = $strTamanio;
        }

        public function setForma(String $strForma){
            $this->strForma = $strForma;
        }

        public function getForma(){
            return $this->strForma;
        }

        public function getInfoProdcuto()
        {
            $arrProducto= array(
                'Descripcion' => $this->strDescripcion,
                'Precio' => $this->fltPrecio,
                'Stock' =>$this->intStock_min,
                'status' => $this->srtStatus,
                'color' => $this->strColor,
                'Mateial' => $this->strMaterial,
                'Tamaño' => $this->strTamanio,
                'Forma' => $this->strForma

            );
            return $arrProducto;
        }
    }

?>