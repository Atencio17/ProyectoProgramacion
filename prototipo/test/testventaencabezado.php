<?php

require("../modelos/ventaencabezadomodelo.php");
require("../controladores/controladorventaencabezado.php");

$ventaencabezado = new ventaEncabezado(1, '2022-11-12', 4000, 1, 'cedula');
$controladorVentaEncabezado = new ControladorVentaEncabezado();
$controladorVentaEncabezado->guardar($ventaencabezado);


?>
