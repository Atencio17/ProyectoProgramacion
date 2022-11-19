<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorUsuarios extends ConectarMySQL implements InterfazControladores{

    private $tabla = "usuarios";

    public function guardar($objeto){
        $sql = "call gestionarusuarios(0,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("sisis", $objeto->contraseña, $objeto->idCliente, $objeto->tipoIdentificacionCliente, $objeto->idEmpleado, $objeto->tipoIdentificacionEmpleado);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarusuarios(1,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("sisis", $objeto->contraseña, $objeto->idCliente, $objeto->tipoIdentificacionCliente, $objeto->idEmpleado, $objeto->tipoIdentificacionEmpleado);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>