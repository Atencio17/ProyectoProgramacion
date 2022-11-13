<?php

class ServicioElemento{
    public $idServicio;
    public $idElemento;


    function __construct($idServicio,$idElemento){

        $this->idServicio = $idServicio;
        $this->idElemento = $idElemento;

    }
}



?>