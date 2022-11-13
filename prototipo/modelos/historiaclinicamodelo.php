<?php

class HistoriaClinica{
    public $idHistoriaClinica;
    public $presionSistolica;
    public $presionDiastolica;
    public $peso;
    public $derivacion;
    public $diagnostico;
    public $numeroDeSesiones;
    public $sesionesTotales;
    public $evolucion;
    public $idCliente;
    public $tipoIdentificacion;

    function __construct($idHistoriaClinica,$presionSistolica,$presionDiastolica,$peso,$derivacion,$diagnostico,$numeroDeSesiones,$sesionesTotales,$evolucion,$idCliente,$tipoIdentificacion){

        $this->idHistoriaClinica = $idHistoriaClinica;
        $this->presionSistolica = $presionSistolica;
        $this->presionDiastolica = $presionDiastolica;
        $this->peso = $peso;
        $this->derivacion = $derivacion;
        $this->diagnostico = $diagnostico;
        $this->numeroDeSesiones = $numeroDeSesiones;
        $this->sesionesTotales = $sesionesTotales;
        $this->evolucion = $evolucion;
        $this->idCliente = $idCliente;
        $this->tipoIdentificacion = $tipoIdentificacion;

    }
}



?>