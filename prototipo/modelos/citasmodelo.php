<?php

class Citas{
    public $idCitas;
    public $cita;
    public $idCliente;
    public $clienteTipoIdentificacion;
    public $idEmpleado;
    public $EmpleadoTipoIdentificacion;


    function __construct($idCitas,$cita,$idCliente, $clienteTipoIdentificacion, $idEmpleado, $EmpleadoTipoIdentificacion){

        $this->idCitas = $idCitas;
        $this->cita = $cita;
        $this->idCliente = $idCliente;
        $this->clienteTipoIdentificacion = $clienteTipoIdentificacion;
        $this->idEmpleado = $idEmpleado;
        $this->EmpleadoTipoIdentificacion = $EmpleadoTipoIdentificacion;

    }


}



?>