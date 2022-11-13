<?php

    require("../componentes/conectarmysql.php");
    require("interfazcontroladores.php");

class ControladorServicios extends ConectarMySQL implements InterfazControladores{

    private $tabla = "servicios";

    public function guardar($objeto){
        $sql = "call gestionarservicios(01,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isisiiii", $objeto->idservicio, $objeto->nombreServicio, $objeto->costoServicio, $objeto->descripcionServicio, $objeto->presionSistolica, $objeto->presionDiastolica, $objeto->peso, $objeto->idCategoria);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarservicios(1,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isisiiii", $objeto->idservicio, $objeto->nombreServicio, $objeto->costoServicio, $objeto->descripcionServicio, $objeto->presionSistolica, $objeto->presionDiastolica, $objeto->peso, $objeto->idCategoria);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>