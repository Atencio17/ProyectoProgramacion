<?php

class ventaDetalle{
    public $subtotal;
    public $cantidad;
    public $precio;
    public $costo;
    public $idVentaEncabezado;
    public $idServicio;

    function __construct($subtotal,$cantidad, $precio, $costo, $idVentaEncabezado ,$idServicio){

        $this->subtotal = $subtotal;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
        $this->costo = $costo;
        $this->idVentaEncabezado = $idVentaEncabezado;
        $this->idServicio = $idServicio;

    }


}



?>