<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

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

    public function listar(){}

    public function consultarRegistro($objeto){}

    public function buscar($id, $tipo){
        $sql = "select * from ".$this->tabla. " where idcliente = ? and tipoidentificacion = ? ";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("is", $id, $tipo);
        $sentencia->execute(); 
        return $resultado = $sentencia->get_result();
    }

    public function perfil($id){
        $sql = "select * from ".$this->tabla. " where idcliente = ?";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("i", $id);
        $sentencia->execute(); 
        return $resultado = $sentencia->get_result();
    }

    public function actualizarPerfil($nombre,$apellido,$telefono,$correo,$id){
        $sql = "update ".$this->tabla. " set nombre = ?, apellido = ?, telefonoCelular = ?, correoElectronico = ? where idcliente = ?";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("ssisi", $nombre,$apellido,$telefono,$correo,$id);
        $sentencia->execute(); 
        return $resultado = $sentencia->get_result();
    }
}

?>