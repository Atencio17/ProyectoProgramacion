<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorExperiencias extends ConectarMySQL implements InterfazControladores{

    private $tabla = "experiencias";

    public function guardar($objeto){
        $sql = "call gestionarexperiencias(0,null,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("sis", $objeto->experiencia, $objeto->idEmpleado, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarexperiencias(1,null,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("sis", $objeto->experiencia, $objeto->idEmpleado, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>