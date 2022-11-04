<?php

class HistoriaClinicaServicio{
    public $idHistoriaClinica;
    public $idServicio;


    function __construct($idHistoriaClinica,$idServicio){

        $this->idHistoriaClinica = $idHistoriaClinica;
        $this->idServicio = $idServicio;

    }
}



?>