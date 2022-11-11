<?php

require("../modelos/estudiomodelo.php");
require("../controladores/controladorestudio.php");

$estudio = new Estudios(1, 'Magister en redes de computadores', 1, 'cedula');
$controladorCategoria = new ControladorEstudios();
$controladorCategoria->guardar($estudio);


?>
