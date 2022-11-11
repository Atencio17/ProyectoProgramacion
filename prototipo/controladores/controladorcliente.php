<?php

    require("../componentes/conectarmysql.php");
    require("interfazcontroladores.php");

class ControladorClientes extends ConectarMySQL implements InterfazControladores{

    private $tabla = "clientes";

    public function guardar($objeto){
        $sql = "call gestionarclientes(0,?,?,?,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isssssssssss", $objeto->idcliente, $objeto->tipoidentificacion, $objeto->nombre, $objeto->apellido, $objeto->fechaNacimiento, $objeto->telefonoCelular, $objeto->correoElectronico, $objeto->direccionResidencia, $objeto->reciboPublico, $objeto->fechaNacimientoAcompañante, $objeto->telefonoAcompañante, $objeto->correoAcompañante);
        $sentencia->execute();
    }
    public function eliminar($objeto){
        $sql = "call gestionarclientes(1,?,?,?,?,?,?,?,?,?,?,?,?)";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("isssssssssss", $objeto->idcliente, $objeto->tipoidentificacion, $objeto->nombre, $objeto->apellido, $objeto->fechaNacimiento, $objeto->telefonoCelular, $objeto->correoElectronico, $objeto->direccionResidencia, $objeto->reciboPublico, $objeto->fechaNacimientoAcompañante, $objeto->telefonoAcompañante, $objeto->correoAcompañante);
        $sentencia->execute();
    }
    public function listar(){}
    public function consultarRegistro($objeto){}

}

?>