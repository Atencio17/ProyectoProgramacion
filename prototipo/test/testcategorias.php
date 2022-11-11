<?php

require("../modelos/categoriamodelo.php");
require("../controladores/controladorcategoria.php");

$categoria = new Categoria(1, 'masages fisicos');
$controladorCategoria = new ControladorCategorias();
$controladorCategoria->guardar($categoria);


?>
