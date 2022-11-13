<?php

require("../modelos/ventadetallemodelo.php");
require("../controladores/controladorventadetalle.php");

$ventaDetalle = new ventaDetalle(5000, 1, 1);
$controladorVentaDetalle = new ControladorVentaDetalle();
$controladorVentaDetalle->guardar($ventaDetalle);


?>
