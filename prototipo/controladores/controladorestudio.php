<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorEstudios extends ConectarMySQL implements InterfazControladores{

    private $tabla = "estudios";

    public function guardar($objeto){
        $sql = "call gestionarestudios(0,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isis", $objeto->idEstudio, $objeto->estudio, $objeto->idEmpleado, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarestudios(1,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isis", $objeto->idEstudio, $objeto->estudio, $objeto->idEmpleado, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>