<?php

require("../modelos/usuariomodelo.php");
require("../controladores/controladorusuario.php");

$usuario = new Usuario('#a2A;?2kD%&', 1, 'cedula', 1, 'cedula');
$controladorCategoria = new ControladorUsuarios();
$controladorCategoria->guardar($usuario);


?>
