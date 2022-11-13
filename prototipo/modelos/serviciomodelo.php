<?php

class Servicio{
    public $idservicio;
    public $nombreServicio;
    public $costoServicio;
    public $descripcionServicio;
    public $presionSistolica;
    public $presionDiastolica;
    public $peso;
    public $precio;
    public $porcentajeDeGanancia;
    public $idCategoria;
    

    function __construct($idservicio,$nombreServicio, $costoServicio, $descripcionServicio, $presionSistolica, $presionDiastolica, $peso, $precio, $porcentajeDeGanancia, $idCategoria){

        $this->idservicio = $idservicio;
        $this->nombreServicio = $nombreServicio;
        $this->costoServicio = $costoServicio;
        $this->descripcionServicio = $descripcionServicio;
        $this->presionSistolica = $presionSistolica;
        $this->presionDiastolica = $presionDiastolica;
        $this->peso = $peso;
        $this->precio = $precio;
        $this->porcentajeDeGanancia = $porcentajeDeGanancia;
        $this->idCategoria = $idCategoria;


    }


}



?>