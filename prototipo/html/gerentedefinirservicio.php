<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definir servicios</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
                <a href="gerenteregistroempleados.php"><button type="button " class="botones ">Registrar empleados</button></a><br>
                <a href="gerentereportedeganancias.html"><button type="button " class="botones ">Reporte de ganancias</button></a><br>
                <a href="gerenteserviciosatendidospormes.html"><button type="button " class="botones ">Servicios atendidos por mes</button></a>
            </div>
        </aside>

        <section>
            <h4 style="text-align: center;">Definir servicios</h4>
            
            <div style="text-align: center; display: flex; justify-content:space-evenly; margin-top:15px;">
                <div class="divFormularios">
                    <div>
                        <form action="">
                            <label for="">Ingrese el id del servicio</label><br>
                            <input type="text" name="idservicio"><br><br>

                            <label for="">Ingrese el nombre del servicio</label><br>
                            <input type="text" name="nombreServicio"><br><br>


                            <label for="">Ganancia en porcentaje</label><br>
                            <input type="number"><br><br>
                        

                            <label for="">Descripción</label> <br>
                            
                            <textarea name="" id="" cols="25" rows="2"></textarea> <br><br>

                            <label for="">Seleccione la categoría</label> <br>
                            <select name="categorias" id="lang">
                                <option value="javascript">categoria1</option>
                                <option value="javascript">categoria2</option>
                            </select> <br><br>

                            <a href="gerentedefinirelementosservicios.php"><button type="button" class="botonsection">Continuar</button></a>
                            <button type="button" class="botonsection">Eliminar</button>
                        </form>
                    </div>
                </div>

                <div>
                    <table style="border: 1px solid #000;">
                        <tr>
                            <th style='border: 1px solid #000; vertical-align: center; text-align: center; padding:5px;'>Código</th>
                            <th style='border: 1px solid #000; vertical-align: center; text-align: center;'>Nombre</th>
                            <th colspan=3 style='border: 1px solid #000; vertical-align: center; text-align: center;'>Acción</th>
                        </tr>

                        <?php
                            include '../controladores/controladorservicio.php';
                            $controladorServicio = new ControladorServicios();
                            $resultado = $controladorServicio->listarDatos();
                            while ($fila = $resultado->fetch_assoc()) {
                                echo "<tr border: 1px solid #000;>";
                                echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['idServicio']."</td>";
                                echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['nombreServicio']."</td>";
                                echo "<td border: 1px solid #000;> <br>
                                
                                <div>
                                <form action='../controladores/controladorformulario.php' method='post'>
                                <input type='number' name='codigo' value=". $fila['idServicio'] ." hidden>
                                <input type='text' name='nombre' value=". $fila['nombreServicio'] ." hidden>
                                <input type='text' name='controlador' value='servicio' hidden>
                                <td border: 1px solid #000;><input type='submit' name='operacion' value='eliminar' class='btn btn-info botonTamaño' style='margin-right:5px'></td>
                                </form> 
                                </div>
                                <div>
                                <form action='../html/gerentedefinirservicio.php' method='post'>
                                <input type='number' name='codigo' value=". $fila['idServicio'] ." hidden>
                                <input type='text' name='nombre' value=". $fila['nombreServicio'] ." hidden>
                                <td border: 1px solid #000;><input type='submit' value='editar' class='btn btn-info botonTamaño' style='margin-right:5px'></td>
                                </form>
                                </div>
                                
                                </td>";
                                echo "</tr>";
                            }
                        ?>

                    </table>
                </div>

            </div>
        </section>
    </div>

    <footer>
        <div style="display: flex; justify-content: space-around;">
            <div>
                <h1>CECAR</h1>
                <a href=" " style="text-decoration: none;"><img src="../recursos/images/cecarlogo.png   " alt="facebook" class="estilogo"></a>
            </div>
            <div>
                <ul>
                    <h6>Contactanos</h6>
                    <div>
                        facebook
                        <a href=" " style="text-decoration: none;"><img src="../recursos/images/facebook.png" alt="facebook"></a><br>Instagram
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

</html>