<?php
class Producto{
    private $codigBarra;
    private $nombre;
    private $marca;
    private $color;
    private $talle;
    private $descripcion;
    private $cantDeStock;

    public function __construct($codBarraProd, $nomProd, $marcaProd, $colorProd, $talleProd, $descripProd, $cantStock){
        $this->codigBarra=$codBarraProd;
        $this->nombre=$nomProd;
        $this->marca=$marcaProd;
        $this->color=$colorProd;
        $this->talle=$talleProd;
        $this->descripcion=$descripProd;
        $this->cantDeStock=$cantStock;
    }

    public function getCodigBarra()
    {
        return $this->codigBarra;
    }
    public function setCodigBarra($codBarraProd)
    {
        $this->codigBarra = $codBarraProd;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nomProd)
    {
        $this->nombre = $nomProd;
    }

    public function getMarca()
    {
        return $this->marca;
    }
    public function setMarca($marcaProd)
    {
        $this->marca = $marcaProd;
    }

    public function getColor()
    {
        return $this->color;
    }
    public function setColor($colorProd)
    {
        $this->color = $colorProd;
    }

    public function getTalle()
    {
        return $this->talle;
    }
    public function setTalle($talleProd)
    {
        $this->talle = $talleProd;
    }

    public function getDescripcion()
    {
        return $this->descripcion;
    }
    public function setDescripcion($descripProd)
    {
        $this->descripcion = $descripProd;
    }

    public function getCantDeStock()
    {
        return $this->cantDeStock;
    }
    public function setCantDeStock($cantStock)
    {
        $this->cantDeStock = $cantStock;
    }

    public function __toString()
    {
        $cadena=("El codigo de barra es: " . $this->getCodigBarra());
        $cadena=("Nombre del producto: " . $this->getNombre());
        $cadena=("Marca del producto: " . $this->getMarca());
        $cadena=("El color del producto es: " . $this->getColor());
        $cadena=("Talle del producto: " . $this->getTalle());
        $cadena=("Descripcion del producto: " . $this->getDescripcion());
        $cadena=("La cantidad en stock: " . $this->getCantDeStock());
        return $cadena;
    }

    public function actualizarStock($cant){
        $nuevoStock = $this->getCantDeStock() + $cant;
        if($nuevoStock > 0 ){
            $this->cantDeStock = $nuevoStock;
        }else{
            $this->cantDeStock = 0;
        }
    }
}