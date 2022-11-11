<?php

interface InterfazControladores{
    public function guardar($objeto);

    public function eliminar($objeto);

    public function listar();

    public function consultarRegistro($objeto);
}

?>