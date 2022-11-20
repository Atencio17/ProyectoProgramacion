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
}elseif ($controlador == "clientes") {

  require_once("../modelos/clientemodelo.php");
  require_once("controladorcliente.php");
  require_once("../modelos/usuariomodelo.php");
  require_once("controladorusuario.php");

  $controladorGenerico = new ControladorClientes();

  //Datos Cliente
  $tipoIdentificacion = $_POST['tipoid'];
  $identificacion = $_POST["identificacion"];
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  $nacimiento = $_POST["nacimiento"];
  $correo = $_POST["correo"];
  $numero = $_POST["numero"];
  $direccion = $_POST["direccion"];
  
  //Datos acompañante
  $nacimientoA = $_POST["nacimientoA"];
  $correoA = $_POST["correoA"];
  $numeroA = $_POST["numeroA"];
  $direccionA = $_POST["direccionA"];

  //Datos comprobantes
  $recibo = $_POST['recibo'];
  $acceso = $_POST['password'];
  $confirmarAcceso = $_POST['passwordDos'];

  if ($acceso == $confirmarAcceso) {

    $objeto = new Cliente($identificacion, $tipoIdentificacion, $nombre, $apellido, $nacimiento, $numero, $correo, $direccion, $recibo, $nacimientoA, $numeroA, $correoA);
    
    if ($operacion == "guardar") {
      $controladorGenerico->guardar($objeto); 
      $controladorGenerico = new ControladorUsuarios();
      $objeto = new Usuario($acceso, $identificacion, $tipoIdentificacion, null, null);
      $controladorGenerico->guardar($objeto);
    }

    // Api para mandar SMS
    require_once("../componentes/httpPHPAltiria.php");
    $altiriaSMS = new AltiriaSMS();

    $altiriaSMS->setLogin('djgg8660@gmail.com');
    $altiriaSMS->setPassword('nbss277b');

    $altiriaSMS->setDebug(true);

    $sDestination = '57'.$numero;

    $codigoCelular = rand(10000,99999);
    $response = $altiriaSMS->sendSMS($sDestination, "Codigo de verificacion: ".$codigoCelular);

    //Api para mandar correos
    require_once '../componentes/PHPMailer.php';
    require_once '../componentes/SMTP.php';

    $mail=new PHPMailer\PHPMailer\PHPMailer();
    $mail->CharSet = 'UTF-8';

    $codigoCorreo = rand(10000,99999);
    $body = 'Codigo de verificacion: '.$codigoCorreo;

    $mail->IsSMTP();
    $mail->Host       = 'smtp.outlook.com';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;
    $mail->SMTPDebug  = 1;
    $mail->SMTPAuth   = true;
    $mail->Username   = 'parcialprogramacion123@outlook.es';
    $mail->Password   = 'parcialganado123';
    $mail->SetFrom('atenciomunive@hotmail.com', "no-reply");
    $mail->AddReplyTo('no-reply@mycomp.com','no-reply');
    $mail->Subject    = 'Codigo verificacion';
    $mail->MsgHTML($body);

    $mail->AddAddress($correo, $nombre." ".$apellido);
    $mail->send();

    echo "
    <form action='../html/secretariaverificacion.php' method='post'>
        <input type='text' value=".$identificacion." name='identificacion' hidden>
        <input type='text' value=".$tipoIdentificacion." name='tipoIdentificacion' hidden>
        <input type='text' value=".$codigoCelular." name='codigoCelular' hidden>
        <input type='text' value=".$codigoCorreo." name='codigoCorreo' hidden>
        <input type='submit' id='enviar' hidden>
    </form>
    <script>
        var elemento = document.getElementById('enviar');
        elemento.click();
    </script>
    ";
    
  } else {
    echo "alert('La contraseña no es la misma')";
    echo "<script>
    window.location.href = '../html/secretariaregistro.html';
  </script>";
  }
  
}elseif ($controlador == "Verificar") {

  $codigoUno = $_POST['codigoUno'];
  $codigoDos = $_POST['codigoDos'];
  $codigoCelular = $_POST['codigocelular'];
  $codigoCorreo = $_POST['codigocorreo'];
  $identificacion = $_POST['identificacion'];
  $tipoIdentificacion = $_POST['tipo'];

  require_once("../modelos/clientemodelo.php");
  require_once("controladorcliente.php");

  $controladorGenerico = new ControladorClientes();
  $objeto = new Cliente($identificacion, $tipoIdentificacion, null,null,null,null,null,null,null,null,null,null);

  if ($codigoUno == $codigoCelular && $codigoDos == $codigoCorreo) {
    echo "alert('Cliente registrado');";
    echo "<script>
    window.location.href = '../html/secretariapaginaprincipal.html';
  </script>";
  }else {
    $controladorGenerico->eliminar($objeto);
    echo "alert('Codigo erroneo, por favor registrese de nuevo');";
    echo "<script>
    window.location.href = '../html/secretariapaginaprincipal.html';
  </script>";
  }
}