<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar empleados</title>
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
        <a href="gerentepaginaprincipal.html"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.html" style="justify-content: flex-end; ">Cerrar sesión</a>
    </nav>

    <div class="row">
        <aside>
            <div class="divaside ">
                <h4>Nombre usuario</h4>
                <a href="gerentereportedeventas.html"><button type="button " class="botones ">Reporte de ventas</button></a><br>
                <a href="gerenteimportegananciasporservicio.html"><button type="button " class="botones ">Importe de ganancias por servicio</button></a><br>
                <a href="gerentedefinirservicio.php"><button type="button " class="botones ">Definir servicios</button></a><br>
                <a href="gerentereportedeganancias.html"><button type="button " class="botones ">Reporte de ganancias</button></a><br>
                <a href="gerenteserviciosatendidospormes.html"><button type="button " class="botones ">Servicios atendidos por mes</button></a>
            </div>
        </aside>

        <section>
            <h4 style="text-align: center; ">REGISTRO DE EMPLEADOS</h4>

            <div style="text-align: center;display: flex;justify-content:space-evenly; margin-top:20px;">
                <div>
                    <form action="">
                    <label for="">Tipo de usuario</label> <br>
                        <select name="usuarios" id="lang">
                            <option value="1">Tipo de usuario</option>
                            <option value="secretaria">secretaria</option>
                            <option value="profesional">profesional</option>
                            <option value="Cliente">Cliente</option>
                            <option value="gerente">gerente</option>
                        </select> <br> <br>

                        <label for="">Tipo de identificación</label> <br>
                        <select name="tiposidentificacion" id="lang">
                            <option value="javascript">Tipo de identificación</option>
                            <option value="Cedula">Cédula</option>
                            <option value="tarjetadeidentidad">Tarjeta de identidad</option>
                            <option value="ceduladeextranjeria">Cedula de extranjeria</option>
                            <option value="pasaporte">Pasaporte</option>
                        </select> <br> <br>
                        <label for="">Numero identificación</label> <br>
                        <input type="number"> <br> <br>
                        <label for="">Nombres</label> <br>
                        <input type="text"> <br> <br>
                        <label for="">Apellidos</label> <br>
                        <input type="text"> <br><br>
                        <label for="">Numero de teléfono</label> <br>
                        <input type="number"> <br>
                        <input type="button" class="btn btn-info botonTamaño " value="registrar empleado" style="margin-top: 20px;"></input>
                    </form>
                </div>
                

                <div>
                    <form action="">
                        <table>
                            <tr>
                                <th style="text-align:center;">Estudios</th>
                                <th style="padding-left:15px; text-align:center;">Experiencia</th>
                            </tr>
                            <tr>
                                <td>xxxxxxxx</td>
                                <td>xxxxxx</td>
                            </tr>
                        </table>
                        <input type="button" class="btn btn-info botonTamaño " value="agregar estudios" style="margin-top: 20px;"></input>
                        <input type="button" class="btn btn-info botonTamaño " value="agregar esperticie" style="margin-top: 20px;"></input>
                    </form>
                </div>
            </div>


        </section>

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