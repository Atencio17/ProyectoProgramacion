<?php

class Experiencia{
    public $idExperiencia;
    public $experiencia;
    public $idEmpleado;
    public $tipoIdentificacion;

    function __construct($idExperiencia,$experiencia, $idEmpleado, $tipoIdentificacion){

        $this->idExperiencia = $idExperiencia;
        $this->experiencia = $experiencia;
        $this->idEmpleado = $idEmpleado;
        $this->tipoIdentificacion = $tipoIdentificacion;
    }
}



?>