<?php

require("../modelos/experienciamodelo.php");
require("../controladores/controladorexperiencia.php");

$experiencia = new Experiencia('1', 'Trabajé como puta en un burdel', 1, 'cedula');
$controladorCategoria = new ControladorExperiencias();
$controladorCategoria->guardar($experiencia);


?>
