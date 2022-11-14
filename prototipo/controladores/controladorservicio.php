<?php

    require("../componentes/conectarmysql.php");
    require("interfazcontroladores.php");

class ControladorServicios extends ConectarMySQL implements InterfazControladores{

    private $tabla = "servicios";

    public function evolucion($uno,$dos,$tres,$cuatro){
        $sql = "update ".$this->tabla." set presionsistolica = ?, presiondiastolica = ?, peso = ? where idServicio = ?";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("iiii",$uno,$dos,$tres,$cuatro);
        $sentencia->execute();
    }

    public function guardar($objeto){
        $sql = "call gestionarservicios(0,?,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isisiiiiii", $objeto->idservicio, $objeto->nombreServicio, $objeto->costoServicio, $objeto->descripcionServicio, $objeto->presionSistolica, $objeto->presionDiastolica, $objeto->peso, $objeto->precio, $objeto->porcentajeDeGanancia, $objeto->idCategoria);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarservicios(1,?,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isisiiiiii", $objeto->idservicio, $objeto->nombreServicio, $objeto->costoServicio, $objeto->descripcionServicio, $objeto->presionSistolica, $objeto->presionDiastolica, $objeto->peso, $objeto->precio, $objeto->porcentajeDeGanancia, $objeto->idCategoria);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

    public function listarDatos(){
        $sql = "select * from ".$this->tabla;
        return $this->getDatos($sql);
    }

    public function getDatos($sql){
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->get_result();
        return $resultado;
    }

}

?>