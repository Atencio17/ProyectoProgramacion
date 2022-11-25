<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de ganancias</title>
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
        <a href="gerentepaginaprincipal.php"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.php" style="justify-content: flex-end; ">Cerrar sesión</a>
    </nav>

    <div class="row">
        <aside>
            <div class="divaside ">
                <h4>Nombre usuario</h4>
                <a href="gerentereportedeventas.php"><button type="button " class="botones ">Reporte de ventas</button></a><br>
                <a href="gerenteimportegananciasporservicio.php"><button type="button " class="botones ">Importe de ganancias por servicio</button></a><br>
                <a href="gerenteregistroempleados.php"><button type="button " class="botones ">Registrar empleados</button></a><br>
                <a href="gerentedefinirservicio.php"><button type="button " class="botones ">Definir servicios</button></a><br>
                <a href="gerenteserviciosatendidospormes.php"><button type="button " class="botones ">Servicios atendidos por mes</button></a>
            </div>
        </aside>

        <section>
            <h4 style="text-align: center; ">Reporte de ganancias</h4>
            <table>
                <tr>
                    <th>Servicio</th>
                    <th>Cantidad de Ventas</th>
                    <th>Costo Total</th>
                    <th>Venta Total</th>
                    <th>Ganancias</th>
                </tr>
                <?php 
                    include_once('../controladores/controladorservicio.php');
                    $controladorGenerico = new ControladorServicios();
                    $resultado = $controladorGenerico->reporteGanancias();
                    while ($fila = $resultado->fetch_assoc()){
                        echo "<tr border: 1px solid #000;>";
                        echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['Nombre']."</td>";
                        echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['Cantidad']."</td>";
                        echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['Costo']."</td>";
                        echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['Precio']."</td>";
                        echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['ganancia']."</td>";
                        echo "<td border: 1px solid #000;> <br>";
                    } 
                ?>
            </table>
        </section>
    </div>

    <footer>
        <div style="display: flex; justify-content: space-around;">
            <div>
                <h1>CECAR</h1>
                <a href=" " style="text-decoration: none;"><img src="../recursos/images/cecarlogo.png " alt="cecar" class="estilogo"></a>
            </div>
            <div>
                <ul>
                    <h6>Contactanos</h6>
                    <div>
                        facebook
                        <a href=" " style="text-decoration: none;"><img src="../recursos/images/facebook.png " alt="facebook"></a><br>Instagram
                        <a href=" "><img src="../recursos/images/instagram.png " alt="instagram "></a><br> numero telefono
                        <a href=" "><img src="../recursos/images/telefono.png " alt="telefono"></a><br> direccioncorreo@example.com
                        <a href=" "><img src="../recursos/images/gmail.png " alt="gmail"></a><br>
                    </div>


                </ul>
            </div>
        </div>
    </footer>

</body>

</html>