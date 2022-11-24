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
                <tr>
                    <th style="text-align:center ; justify-content: center;"></th>
                </tr>
                <tr>
                    <td></td>
                    <tr id="fila0">
                        <th>tipo de servicio</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                    </tr>
                    <tr id="fila1">
                        <td>Columna 2.1</td>
                        <td>Columna 2.2</td>
                        <td>Columna 2.3</td>
                        <td><input type="button" class="borrar" value="Eliminar" /></td>
                    </tr>
                    <tr id="fila2">
                        <td>Columna 3.1</td>
                        <td>Columna 3.2</td>
                        <td>Columna 3.3</td>
                        <td><input type="button" class="borrar" value="Eliminar" /></td>
                    </tr>
                    <tr id="fila3">
                        <td>Columna 4.1</td>
                        <td>Columna 4.2</td>
                        <td>Columna 4.3</td>
                        <td><input type="button" class="borrar" value="Eliminar" /></td>
                    </tr>
                    <tr id="fila4">
                        <td>Columna 5.1</td>
                        <td>Columna 5.2</td>
                        <td>Columna 5.3</td>
                        <td><input type="button" class="borrar" value="Eliminar" /></td>
                    </tr>

                </tr>

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