<?php

require("../modelos/elementomodelo.php");
require("../controladores/controladorelemento.php");

$elemento = new Elementos(1, 'Aceite', 50000, 'Este se usa para realizar los diferentes masages');
$controladorCategoria = new ControladorElementos();
$controladorCategoria->guardar($elemento);


?>
