<?php

class Empleados{
    public $idEmpleado;
    public $tipoIdentificacion;
    public $nombre;
    public $apellido;

    function __construct($idEmpleado,$tipoIdentificacion,$nombre, $apellido){

        $this->idEmpleado = $idEmpleado;
        $this->tipoIdentificacion = $tipoIdentificacion;
        $this->nombre = $nombre;
        $this->apellido = $apellido;


    }


}



?>