<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorExperiencias extends ConectarMySQL implements InterfazControladores{

    private $tabla = "experiencias";

    public function guardar($objeto){
        $sql = "call gestionarexperiencias(0,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("ssis", $objeto->idExperiencia, $objeto->experiencia, $objeto->idEmpleado, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarexperiencias(1,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("ssis", $objeto->idExperiencia, $objeto->experiencia, $objeto->idEmpleado, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>