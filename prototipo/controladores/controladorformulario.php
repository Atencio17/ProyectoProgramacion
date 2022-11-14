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
                window.location.href = '../html/administradorcategorias.php';
              </script>";

    }elseif ($operacion == "eliminar") {

        $controladorGenerico->eliminar($objeto);
        echo "<script>
                window.location.href = '../html/administradorcategorias.php';
              </script>";

    }
}elseif($controlador == "elemento"){
  require_once("../modelos/elementomodelo.php");
  require_once("controladorelemento.php");

  $codigo = $_POST["codigo"];
  $nombre = $_POST["nombre"];
  $costo = $_POST["costo"];
  $descripcion = $_POST["descripcion"];

  $objeto = new Elementos($codigo, $nombre, $costo, $descripcion);
  $controladorGenerico = new ControladorElementos();

  if ($operacion == "guardar") {
      
      $controladorGenerico->guardar($objeto);
      echo "<script>
              window.location.href = '../html/administradormateriasprimas.php';
            </script>";

  }elseif ($operacion == "eliminar") {

      $controladorGenerico->eliminar($objeto);
      echo "<script>
              window.location.href = '../html/administradormateriasprimas.php';
            </script>";

  }
}elseif($controlador == "evolucion"){
  require_once("../modelos/serviciomodelo.php");
  require_once("controladorservicio.php");

  $codigo = $_POST["servicio"];

  $presionUno = $_POST["presionUno"];
  $presionDos = $_POST["presionDos"];
  $peso = $_POST["peso"];


  $controladorGenerico = new ControladorServicios();

  if ($operacion == "guardar") {
      
      $controladorGenerico->evolucion($presionUno,$presionDos,$peso,$codigo);
      echo "<script>
              window.location.href = '../html/administradorevolucion.php';
            </script>";

  }
}