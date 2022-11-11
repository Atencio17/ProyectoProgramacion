<?php

require("../modelos/citasmodelo.php");
require("../controladores/controladorcitas.php");

$cita = new Citas(1, '2022-11-11 12:30:45',1, 'cedula', 1, 'cedula');
$controladorCategoria = new ControladorCitas();
$controladorCategoria->guardar($cita);


?>
