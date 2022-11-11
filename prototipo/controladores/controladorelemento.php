<?php

    require("../componentes/conectarmysql.php");
    require("interfazcontroladores.php");

class ControladorElementos extends ConectarMySQL implements InterfazControladores{

    private $tabla = "elementos";

    public function guardar($objeto){
        $sql = "call gestionarelementos(0,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isis", $objeto->idElemento, $objeto->nombre, $objeto->costo, $objeto->descripcion);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarelementos(1,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isis", $objeto->idElemento, $objeto->nombre, $objeto->costo, $objeto->descripcion);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>