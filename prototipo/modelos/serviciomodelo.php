<?php

class Categoria{
    public $idservicio;
    public $nombre;
    public $costo;
    public $precio;

    function __construct($idcategoria,$categoria){

        $this->idcategoria = $idcategoria;
        $this->categoria = $categoria;

    }


}



?>