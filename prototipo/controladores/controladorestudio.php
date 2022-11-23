<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorEstudios extends ConectarMySQL implements InterfazControladores{

    private $tabla = "estudios";

    public function guardar($objeto){
        $sql = "call gestionarestudios(0,null,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("sis", $objeto->estudio, $objeto->idEmpleado, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarestudios(1,null,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("sis", $objeto->estudio, $objeto->idEmpleado, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>