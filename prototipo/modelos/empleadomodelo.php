<?php

class Empleados{
    public $idEmpleado;
    public $tipoIdentificacion;
    public $nombre;
    public $apellido;
    public $tipoUsuario;

    function __construct($idEmpleado,$tipoIdentificacion,$nombre, $apellido, $tipoUsuario){

        $this->idEmpleado = $idEmpleado;
        $this->tipoIdentificacion = $tipoIdentificacion;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipoUsuario = $tipoUsuario;


    }


}



?>