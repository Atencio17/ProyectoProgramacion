<?php

class Estudios{
    public $estudio;
    public $idEmpleado;
    public $tipoIdentificacion;

    function __construct($estudio,$idEmpleado, $tipoIdentificacion){

        $this->estudio = $estudio;
        $this->idEmpleado = $idEmpleado;
        $this->tipoIdentificacion = $tipoIdentificacion;
    }
}



?>