<?php

require("../modelos/clientemodelo.php");
require("../controladores/controladorcliente.php");

$cliente = new Cliente(1, 'cedula', 'Daniel', 'Gonzalez', '2004-05-12', '3005719154', 'daniel.gonzalezg@gmail.com', 'Calle 33 A #19-D 20', 'si', '1990-05-28','3146684673', 'Henry124@gmail.com');
$controladorCategoria = new ControladorClientes();
$controladorCategoria->guardar($cliente);


?>
