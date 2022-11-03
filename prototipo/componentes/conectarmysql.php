<?php

class conectarMySQL{

    private $conexion;

    function __construct(){
        require("../configuraciones/configuraciones.php");
        $this->conexion = mysqli_connect($servidor,$usuario,$contraseña,$basededatos,$puerto);
    }

    function getConexion(){
        return $this->conexion;
    }

}

?>