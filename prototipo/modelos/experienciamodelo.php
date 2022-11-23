<?php

class Experiencia{
    public $experiencia;
    public $idEmpleado;
    public $tipoIdentificacion;

    function __construct($experiencia, $idEmpleado, $tipoIdentificacion){

        $this->experiencia = $experiencia;
        $this->idEmpleado = $idEmpleado;
        $this->tipoIdentificacion = $tipoIdentificacion;
    }
}



?>