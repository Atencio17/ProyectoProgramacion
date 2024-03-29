<?php

// $timestamp = strtotime('2009-10-22');

// $day = date('D', $timestamp);
// var_dump($day);

    require_once("../componentes/conectarmysql.php");
    require_once("interfazcontroladores.php");

class ControladorCategorias extends conectarMySQL implements InterfazControladores{

    private $tabla = "categorias";

    public function guardar($objeto){
        $sql = "call gestionarcategorias(0,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("is", $objeto->idcategoria, $objeto->categoria);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarcategorias(1,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("is", $objeto->idcategoria, $objeto->categoria);
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