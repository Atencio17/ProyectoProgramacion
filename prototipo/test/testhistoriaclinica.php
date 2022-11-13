<?php

require("../modelos/historiaclinicamodelo.php");
require("../controladores/controladorhistoriaclinica.php");

$historiaClinica = new HistoriaClinica(1, 60, 75, 80, 'pepito clavo un clavito', 'mi papa se llama edga', 10, 2, 'la evolucion es negativa', 1,'cedula');
$controladorHistoriaClinica = new ControladorHistoriasClinicas();
$controladorHistoriaClinica->guardar($historiaClinica);


?>
