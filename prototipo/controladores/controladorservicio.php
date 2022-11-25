<?php

require_once("../componentes/conectarmysql.php");
require_once("interfazcontroladores.php");

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

    public function importe(){
        $sql = "select nombreServicio as nombre, (precio - costoServicio) as importe from servicios ";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->execute(); 
        return $resultado = $sentencia->get_result();
    }

    public function reporteGanancias(){
        $sql = "select s.nombreservicio as Nombre, count(ve.idventaencabezado) as Cantidad, 
        sum(s.costoservicio) as Costo, sum(s.precio) as Precio, 
        (sum(s.precio)-sum(s.costoservicio)) as ganancia
        from servicios s, ventadetalle vd, ventaencabezado ve
        where (s.idservicio = vd.idservicio) and (vd.idventaEncabezado = ve.idventaEncabezado) group by 1;";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->execute(); 
        return $resultado = $sentencia->get_result();
    }

    public function reporteMes($mes){
        $sql = "select s.nombreservicio as Nombre, 
        count(ve.idventaencabezado) as Cantidad, ve.fecha as fecha
        from servicios s, ventadetalle vd, ventaencabezado ve
        where (s.idservicio = vd.idservicio) and (vd.idventaEncabezado = ve.idventaEncabezado) 
        and monthname(ve.fecha) = ? group by 1";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->bind_param("s", $mes);
        $sentencia->execute();
        return $resultado = $sentencia->get_result();
    }

    public function reporteventas(){
        $sql = "select s.nombreservicio as Nombre, count(ve.idventaencabezado) as Cantidad
        from servicios s, ventadetalle vd, ventaencabezado ve
        where (s.idservicio = vd.idservicio) and (vd.idventaEncabezado = ve.idventaEncabezado) group by 1";
        $sentencia = $this->getConexion()->prepare($sql);
        $sentencia->execute(); 
        return $resultado = $sentencia->get_result();
    }
    
}

?>