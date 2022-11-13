<?php

require("../modelos/servicioelementomodelo.php");
require("../controladores/controladorservicioselementos.php");

$elementoservicio = new ServicioElemento(1, 1);
$controladorServicioElemento = new ControladorServiciosElementos();
$controladorServicioElemento->guardar($elementoservicio);


?>
