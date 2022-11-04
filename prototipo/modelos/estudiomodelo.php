<?php

class Estudios{
    public $idEstudio;
    public $estudio;
    public $idEmpleado;
    public $tipoIdentificacion;

    function __construct($idEstudio,$estudio,$idEmpleado, $tipoIdentificacion){

        $this->idEstudio = $idEstudio;
        $this->estudio = $estudio;
        $this->idEmpleado = $idEmpleado;
        $this->tipoIdentificacion = $tipoIdentificacion;
    }
}



?>