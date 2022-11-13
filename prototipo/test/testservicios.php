<?php

require("../modelos/serviciomodelo.php");
require("../controladores/controladorservicio.php");

$servicio = new Servicio(1, 'Fisioterapia', 20000, 'se chupan bolas', 70, 75, 80, 1000, 40, 1);
$controladorServicio = new ControladorServicios();
$controladorServicio->guardar($servicio);


?>
