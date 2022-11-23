<?php

class Cliente{
    
    public $idcliente;
    public $tipoidentificacion;
    public $nombre;
    public $apellido;
    public $fechaNacimiento;
    public $telefonoCelular;
    public $correoElectronico;
    public $direccionResidencia;
    public $reciboPublico;
    public $fechaNacimientoAcompañante;
    public $telefonoAcompañante;
    public $correoAcompañante;

    function __construct($idcliente = "",$tipoidentificacion = "",$nombre = "",$apellido = "",$fechaNacimiento = "",$telefonoCelular = "", $correoElectronico = "", $direccionResidencia = "", $reciboPublico = "", $fechaNacimientoAcompañante = "",$telefonoAcompañante = "",$correoAcompañante = ""){

        $this->idcliente = $idcliente;
        $this->tipoidentificacion = $tipoidentificacion;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->telefonoCelular = $telefonoCelular;
        $this->correoElectronico = $correoElectronico;
        $this->direccionResidencia = $direccionResidencia;
        $this->reciboPublico = $reciboPublico;
        $this->fechaNacimientoAcompañante = $fechaNacimientoAcompañante;
        $this->telefonoAcompañante = $telefonoAcompañante;
        $this->correoAcompañante = $correoAcompañante;

    }
}
?>