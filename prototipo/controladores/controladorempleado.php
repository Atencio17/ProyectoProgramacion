<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorEmpleados extends ConectarMySQL implements InterfazControladores{

    private $tabla = "empleados";

    public function guardar($objeto){
        $sql = "call gestionarempleados(0,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("issss", $objeto->idEmpleado, $objeto->tipoIdentificacion, $objeto->nombre, $objeto->apellido, $objeto->tipoUsuario);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarempleados(1,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("issss", $objeto->idEmpleado, $objeto->tipoIdentificacion, $objeto->nombre, $objeto->apellido, $objeto->tipoUsuario);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>