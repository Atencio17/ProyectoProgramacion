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
    public function citaEspecifica($id){
        $sql = "select * from ".$this->tabla." where idcliente = ?";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function buscar($uno, $dos){
        $sql = "select idHistoriaClinica from ".$this->tabla." where idCliente = ? and tipoIdentificacion = ?";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("is", $uno, $dos);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function citaEspecificaDos($id, $tipo){
        $sql = "select * from ".$this->tabla." where idCliente = ? and tipoIdentificacion = ?";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("is", $id, $tipo);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

    public function actualizarHistoria($uno,$dos,$tres,$cuatro,$cinco,$seis){
        $sql = "update ".$this->tabla." set presionsistolica = ?, presiondiastolica = ?, peso = ?, numeroDeSesiones = ? where idCliente = ? and tipoIdentificacion = ?";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("iiiiis",$uno,$dos,$tres,$cuatro,$cinco,$seis);
        $sentencia->execute();
    }

    public function citaEspecificaTres($id){
        $sql = "select tipoIdentificacion from ".$this->tabla." where idcliente = ?";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("i", $id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

}

?>