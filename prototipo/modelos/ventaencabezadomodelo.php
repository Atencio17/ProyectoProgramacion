<?php

class ventaEncabezado{
    public $idVentaEncabezado;
    public $fecha;
    public $total;
    public $idCliente;
    public $tipoIdentificacion;

    function __construct($idVentaEncabezado,$fecha, $total, $idCliente, $tipoIdentificacion ){

        $this->idVentaEncabezado = $idVentaEncabezado;
        $this->fecha = $fecha;
        $this->total = $total;
        $this->idCliente = $idCliente;
        $this->tipoIdentificacion = $tipoIdentificacion;
        
    }
}



?>