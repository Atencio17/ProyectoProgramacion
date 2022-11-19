<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorVentaEncabezado extends ConectarMySQL implements InterfazControladores{

    private $tabla = "experiencias";

    public function guardar($objeto){
        $sql = "call gestionarventaencabezado(0,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isiis", $objeto->idVentaEncabezado, $objeto->fecha, $objeto->total, $objeto->idCliente, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarventaencabezado(1,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isiis", $objeto->idVentaEncabezado, $objeto->fecha, $objeto->total, $objeto->idCliente, $objeto->tipoIdentificacion);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>