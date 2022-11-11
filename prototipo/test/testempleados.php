<?php

require("../modelos/empleadomodelo.php");
require("../controladores/controladorempleado.php");

$empleado = new Empleados(1, 'cedula', 'Daniel', 'Gonzalez', 'Profesional');
$controladorCategoria = new ControladorEmpleados();
$controladorCategoria->guardar($empleado);


?>
