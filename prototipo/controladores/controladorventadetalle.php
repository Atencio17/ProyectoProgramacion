<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorVentaDetalle extends ConectarMySQL implements InterfazControladores{

    private $tabla = "ventadetalle";

    public function guardar($objeto){
        $sql = "call gestionarventadetalle(0,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("iii", $objeto->precio, $objeto->idVentaEncabezado, $objeto->idServicio);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarventadetalle(1,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("iii", $objeto->precio, $objeto->idVentaEncabezado, $objeto->idServicio);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>