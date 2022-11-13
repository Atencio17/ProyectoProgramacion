<?php

    require("../componentes/conectarmysql.php");
    require("interfazcontroladores.php");

class ControladorCitas extends ConectarMySQL implements InterfazControladores{

    private $tabla = "citas";

    public function guardar($objeto){
        $sql = "call gestionarcitas(0,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isisis", $objeto->idCitas, $objeto->cita, $objeto->idCliente, $objeto->clienteTipoIdentificacion, $objeto->idEmpleado, $objeto->EmpleadoTipoIdentificacion);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarcitas(1,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isisis", $objeto->idCitas, $objeto->cita, $objeto->idCliente, $objeto->clienteTipoIdentificacion, $objeto->idEmpleado, $objeto->EmpleadoTipoIdentificacion);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>