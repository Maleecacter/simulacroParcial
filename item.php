<?php 
class Item{
    private $cantidadVendida;
    private $refProductoInst;

    public function __construct($cantVendida, $objProducto){
        $this->cantidadVendida=$cantVendida;
        $this->refProductoInst=$objProducto;
    }

    public function getCantidadVendida()
    {
        return $this->cantidadVendida;
    }
    public function setCantidadVendida($cantVendida)
    {
        $this->cantidadVendida = $cantVendida;
    }
    
    public function getRefProductoInst()
    {
        return $this->refProductoInst;
    }
    public function setRefProductoInst($objProducto)
    {
        $this->refProductoInst = $objProducto;
    }


    public function __toString(){
        $cadena=("Cantidad vendida: " . $this->getCantidadVendida());
        $cadena=("producto: " . $this->getRefProductoInst());
        return $cadena;
        
    }
}
?>