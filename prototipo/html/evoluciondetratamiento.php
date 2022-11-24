<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolución de tratamiento</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8 " crossorigin="anonymous "></script>

    <header>
        <h1>CECAR</h1>
    </header>

    <nav>
        <a href="oficinavirtual.php "><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.php" style="justify-content: flex-end; ">Cerrar sesión</a>
    </nav>

    <div class="row">
        <aside>
            <div class="divaside ">
                <h4>Nombre usuario</h4>
                <a href="agendarcitas.php"><button type="button " class="botones ">Agendar citas médicas</button></a><br>
                <a href="consultarcita.php"><button type="button " class="botones ">Consultar y cancelar cita</button></a><br>
                <a href="informacionpersonal.php"><button type="button " class="botones ">Información personal</button></a><br>

            </div>
        </aside>

        <section>
            <h4 style="text-align: center; ">Evolución de tratamiento</h4>
            <table style=" width: 100%; justify-content: space-around; display: flex;">
                <tr>
                    <td></td>
                    <tr id="fila0" style="border: solid;">
                        <th style="border: solid;">Diagnóstico clínico </th>
                        <th style="border: solid;">Peso</th>
                        <th style="border: solid;">Presión arterial sistolica</th>
                        <th style="border: solid;">Presión arterial diastolica</th>
                        <th style="border: solid;">Derivación</th>
                        <th style="border: solid;">Resultados</th>

                    </tr>
                    <?php 
                        include '../controladores/controladorhistoriaclinica.php';
                        $controladorCliente = new ControladorHistoriasClinicas();
                        $id = $_SESSION['identificacion'];
                        $resultado = $controladorCliente->citaEspecifica($id);
                        while ($fila = $resultado->fetch_assoc()) {
                            echo "<tr border: 1px solid #000;>";
                            echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['diagnostico']."</td>";

                            echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['peso']."</td>";

                            echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['presionsistolica']."</td>";

                            echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['presiondiastolica']."</td>";

                            echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['derivacion']."</td>";

                            echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['evolucion']."</td>";

                            echo "</tr>";
                        }
                    ?>

                </tr>

            </table>
        </section>
    </div>

    <footer>
        <div style="display: flex; justify-content: space-around; ">
            <div>
                <h1>CECAR</h1>
                <a href=" " style="text-decoration: none; "><img src="../recursos/images/cecarlogo.png " alt="facebook " class="estilogo"></a>
            </div>
            <div>
                <ul>
                    <h6>Contactanos</h6>
                    <div>
                        facebook
                        <a href=" " style="text-decoration: none; "><img src="../recursos/images/facebook.png " alt="facebook "></a><br>Instagram
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