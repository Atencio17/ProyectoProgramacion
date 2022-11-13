<?php

require("../modelos/historiaclinicaserviciomodelo.php");
require("../controladores/controladorhistoriaclinicaservicio.php");

$historiaClinicaServicio = new HistoriaClinicaServicio(1, 1);
$controladorHistoriaClinicaServicio = new ControladorHistoriaClinicaServicio();
$controladorHistoriaClinicaServicio->guardar($historiaClinicaServicio);


?>
