<?php
class Venta{
    private $fecha;
    private $denominacionCliente;
    private $numeroFactura;
    private $tipoComprobante; // hhh
    // private $refcolItemsVendidos = [];
    private $refcolItemsVendidos; # Array (arreglo)

    public function __construct($fechaVenta, $denominDelCliente, $numFactura, $tipoComprobante, $colItemsVendidos ){
        $this->fecha=$fechaVenta;
        $this->denominacionCliente=$denominDelCliente;
        $this->numeroFactura=$numFactura;
        $this->tipoComprobante=$tipoComprobante;
        $this->refcolItemsVendidos=$colItemsVendidos;
        // $this->refcolItemsVendidos=[]; #Inicio como vacio
    }

    public function getFecha()
    {
        return $this->fecha;
    }
    public function setFecha($fechaVenta)
    {
        $this->fecha = $fechaVenta;
    }

    public function getDenominacionCliente()
    {
        return $this->denominacionCliente;
    }
    public function setDenominacionCliente($denominDelCliente)
    {
        $this->denominacionCliente = $denominDelCliente;
    }

    public function getNumeroFactura()
    {
        return $this->numeroFactura;
    }
    public function setNumeroFactura($numFactura)
    {
        $this->numeroFactura = $numFactura;
    }

    public function getTipoComprobante()
    {
        return $this->tipoComprobante;
    }
    public function setTipoComprobante($tipoComprobante)
    {
        $this->tipoComprobante = $tipoComprobante;
    }

    public function getRefcolItemsVendidos()
    {
        return $this->refcolItemsVendidos;
    }
    public function setRefcolItemsVendidos($colItemsVendidos)
    {
        $this->refcolItemsVendidos = $colItemsVendidos;
    }

    public function __toString(){
        $items = $this->getRefcolItemsVendidos();
        $cadenaItems="";
        foreach ($items as $item){
            $cadenaItems .= $item . "\n";
        }
        $cadena = ( 
            "fecha de la venta: " . $this->getFecha() . "\n" . 
            "denominacion del cliente: " . $this->getDenominacionCliente() . "\n" . 
            "numero de factura: " . $this->getNumeroFactura() . "\n" .
            "tipo de comprobante (A o B): " . $this->getTipoComprobante() . "\n" .
            "items vendidos: " . $cadenaItems . "\n"
        );
        return $cadena;
    }

    public function incorporarProducto($objProducto, $registrarCant){
        $realizarVenta = false;
        $cantStock = $objProducto->getCantDeStock();
        if($cantStock >= $registrarCant){
            $objItem = new Item($registrarCant,$objProducto);
            $coleccionItems=$this->getRefcolItemsVendidos();
            array_push($coleccionItems,$objItem);
            $this->setRefcolItemsVendidos($coleccionItems);
            $realizarVenta = true;
        }
        return $realizarVenta;
    }
}

?>