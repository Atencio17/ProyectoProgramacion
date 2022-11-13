<?php

class ventaDetalle{
    public $precio;
    public $idVentaEncabezado;
    public $idServicio;

    function __construct($precio, $idVentaEncabezado ,$idServicio){

        $this->precio = $precio;
        $this->idVentaEncabezado = $idVentaEncabezado;
        $this->idServicio = $idServicio;

    }


}



?>