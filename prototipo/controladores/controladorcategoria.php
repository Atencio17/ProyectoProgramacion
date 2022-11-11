<?php

    require("../componentes/conectarmysql.php");
    require("interfazcontroladores.php");

class ControladorCategorias extends ConectarMySQL implements InterfazControladores{

    private $tabla = "experiencias";

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

}

?>