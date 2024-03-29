<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

class ControladorServiciosElementos extends ConectarMySQL implements InterfazControladores{

    private $tabla = "servicioselementos";

    public function guardar($objeto){
        $sql = "call gestionarservicioselementos(0,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("ii", $objeto->idServicio, $objeto->idElemento);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarservicioselementos(1,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("ii", $objeto->idServicio, $objeto->idElemento);
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