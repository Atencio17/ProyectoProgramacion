<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorHistoriaClinicaServicio extends ConectarMySQL implements InterfazControladores{

    private $tabla = "historiasclinicasservicios";

    public function guardar($objeto){
        $sql = "call gestionarhistoriasclinicasservicios(0,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("ii", $objeto->idHistoriaClinica, $objeto->idServicio);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarhistoriasclinicasservicios(1,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("ii", $objeto->idHistoriaClinica, $objeto->idServicio);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>