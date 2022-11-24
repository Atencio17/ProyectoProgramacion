<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar cita</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="../js/funcionalidad.js">
    </script>
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8 " crossorigin="anonymous "></script>



    <header>
        <h1>CECAR</h1>
    </header>

    <nav>
        <a href="oficinavirtual.php"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.php" style="justify-content: flex-end; ">Cerrar sesión</a>
    </nav>

    <div class="row">
        <aside>
            <div class="divaside ">
                <h4>Nombre usuario</h4>
                <a href="agendarcitas.php"><button type="button " class="botones ">Agendar citas médicas</button></a><br>
                <a href="evoluciondetratamiento.php"><button type="button " class="botones ">Evolución del tratamiento</button></a><br>
                <a href="informacionpersonal.php"><button type="button " class="botones ">Información personal</button></a><br>
            </div>
        </aside>

        <section>
            <h4 style="text-align: center; ">CONSULTA Y CANCELAMIENTO DE CITAS</h4>
            
            <table style=" width: 100%; justify-content: space-around;">
               <?php 
                include '../controladores/controladorcitas.php';
                $controladorCliente = new ControladorCitas();
                $id = $_SESSION['identificacion'];
                $resultado = $controladorCliente->citaEspecifica($id);
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr border: 1px solid #000;>";
                    echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['cita']."</td>";
                    echo "<td border: 1px solid #000;> <br>
                    
                    <div>
                    <form action='../controladores/controladorformulario.php' method='post'>
                    <input type='number' name='codigo' value=". $fila['idcitas'] ." hidden>
                    <input type='number' name='hora' value=". $fila['cita'] ." hidden>
                    <input type='number' name='id' value=". $fila['idCliente'] ." hidden>
                    <input type='number' name='tipo' value=". $fila['clientes_tipoIdentificacion'] ." hidden>
                    <input type='text' name='controlador' value='citas' hidden>
                    <td border: 1px solid #000;><input type='submit' name='operacion' value='eliminar' class='btn btn-info botonTamaño' style='margin-right:5px'></td>
                    </form> 
                    </div>
                    
                    </td>";
                    echo "</tr>";
                }
               ?>
            </table>
        </section>
    </div>

    <footer>
        <div style="display: flex; justify-content: space-around;">
            <div>
                <h1>CECAR</h1>
                <a href=" " style="text-decoration: none;"><img src="../recursos/images/cecarlogo.png " alt="facebook" class="estilogo"></a>
            </div>
            <div>
                <ul>
                    <h6>Contactanos</h6>
                    <div>
                        facebook
                        <a href=" " style="text-decoration: none;"><img src="../recursos/images/facebook.png " alt="facebook"></a><br>Instagram
                        <a href=" "><img src="../recursos/images/instagram.png " alt="facebook "></a><br> numero telefono
                        <a href=" "><img src="../recursos/images/telefono.png " alt=" "></a><br> direccioncorreo@example.com
                        <a href=" "><img src="../recursos/images/gmail.png " alt=" "></a><br>
                    </div>


                </ul>
            </div>
        </div>
    </footer>


</body>

</html>