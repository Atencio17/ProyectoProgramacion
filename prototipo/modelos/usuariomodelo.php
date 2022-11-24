<?php

class Usuario{
    public $contrasena;
    public $idCliente;
    public $tipoIdentificacionCliente;
    public $idEmpleado;
    public $tipoIdentificacionEmpleado;
    public $tipo;

    function __construct($contrasena,$idCliente, $tipoIdentificacionCliente, $idEmpleado, $tipoIdentificacionEmpleado, $tipo){

        $this->contrasena = $contrasena;
        $this->idCliente = $idCliente;
        $this->tipoIdentificacionCliente = $tipoIdentificacionCliente;
        $this->idEmpleado = $idEmpleado;
        $this->tipoIdentificacionEmpleado = $tipoIdentificacionEmpleado;
        $this->tipo = $tipo;

    }


}



?>