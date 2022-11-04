<?php

class Usuario{
    public $contraseña;
    public $idCliente;
    public $tipoIdentificacionCliente;
    public $idEmpleado;
    public $tipoIdentificacionEmpleado;

    function __construct($contraseña,$idCliente, $tipoIdentificacionCliente, $idEmpleado, $tipoIdentificacionEmpleado){

        $this->contraseña = $contraseña;
        $this->idCliente = $idCliente;
        $this->tipoIdentificacionCliente = $tipoIdentificacionCliente;
        $this->idEmpleado = $idEmpleado;
        $this->tipoIdentificacionEmpleado = $tipoIdentificacionEmpleado;

    }


}



?>