<?php

class Elementos{
    public $idElemento;
    public $nombre;
    public $costo;
    public $descripcion;

    function __construct($idElemento,$nombre,$costo, $descripcion){

        $this->idElemento = $idElemento;
        $this->nombre = $nombre;
        $this->costo = $costo;
        $this->descripcion = $descripcion;


    }


}



?>