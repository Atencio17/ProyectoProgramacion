<?php

$controlador = $_POST["controlador"];
$operacion = $_POST["operacion"];

if ($controlador == "categoria") {
    require_once("../modelos/categoriamodelo.php");
    require_once("controladorcategoria.php");

    $codigo = $_POST["codigo"];
    $nombre = $_POST["nombre"];

    $objeto = new Categoria($codigo, $nombre);
    $controladorGenerico = new ControladorCategorias();

    if ($operacion == "guardar") {
        
        $controladorGenerico->guardar($objeto);
        echo "<script>
                alert('insertó de forma exitosa');
                window.location.href = '../html/administradorcategorias.php';
              </script>";

    }elseif ($operacion == "eliminar") {

        $controladorGenerico->eliminar($objeto);
        echo "<script>
                alert('Eliminó de forma exitosa');
                window.location.href = '../html/administradorcategorias.php';
              </script>";

    }
}