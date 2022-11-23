<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorUsuarios extends ConectarMySQL implements InterfazControladores{

    private $tabla = "usuarios";

    public function guardar($objeto){
        $sql = "call gestionarusuarios(0,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("sisiss", $objeto->contraseña, $objeto->idCliente, $objeto->tipoIdentificacionCliente, $objeto->idEmpleado, $objeto->tipoIdentificacionEmpleado, $objeto->tipo);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarusuarios(1,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("sisiss", $objeto->contraseña, $objeto->idCliente, $objeto->tipoIdentificacionCliente, $objeto->idEmpleado, $objeto->tipoIdentificacionEmpleado, $objeto->tipo);
        $sentencia->execute();
    }
    public function listar(){}
    
    public function consultarRegistro($objeto){

        $sql = "Select tipo from ".$this->tabla." where 
        idCliente = ? and contraseña = ?";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("ss",$objeto->identificador,
        $objeto->password);
        $sentencia->execute();
        $result = $sentencia -> get_result();
        return $result;

      }

      public function consultarRegistroEmpleado($objeto){

        $sql = "Select tipo from ".$this->tabla." where 
        identificador = ? and password = ?";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("ss",$objeto->identificador,
        $objeto->password);
        $sentencia->execute();
        $result = $sentencia -> get_result();
        return $result;

      }

}

?>