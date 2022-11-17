<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorHistoriasClinicas extends ConectarMySQL implements InterfazControladores{

    private $tabla = "historiasclinicas";

    public function guardar($objeto){
        $sql = "call gestionarhistoriasclinicas(0,?,?,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("iiiissiisis", $objeto->idHistoriaClinica, $objeto->presionSistolica, $objeto->presionDiastolica, $objeto->peso, $objeto->derivacion, $objeto->diagnostico, $objeto->numeroDeSesiones, $objeto->sesionesTotales, $objeto->evolucion, $objeto->idCliente, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarhistoriasclinicas(1,?,?,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("iiiissiisis", $objeto->idHistoriaClinica, $objeto->presionSistolica, $objeto->presionDiastolica, $objeto->peso, $objeto->derivacion, $objeto->diagnostico, $objeto->numeroDeSesiones, $objeto->sesionesTotales, $objeto->evolucion, $objeto->idCliente, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>