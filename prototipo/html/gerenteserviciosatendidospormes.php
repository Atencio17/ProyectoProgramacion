<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios atentidos por mes</title>
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
        <a href="gerentepaginaprincipal.php"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.php" style="justify-content: flex-end; ">Iniciar sesión</a>
    </nav>

    <div class="row">


        <section>
            <h4 style="text-align: center; ">SERVICIOS ATENDIDOS POR MES</h4>
            <form action="gerenteserviciosatendidospormes2.php" method="post">
                <select name="mes" id="">
                    <option value="January">Enero</option>
                    <option value="February">Febrero</option>
                    <option value="March">Marzo</option>
                    <option value="April">Abril</option>
                    <option value="May">Mayo</option>
                    <option value="June">Junio</option>
                    <option value="July">Julio</option>
                    <option value="August">Agosto</option>
                    <option value="September">Septiembre</option>
                    <option value="Octubre">Octubre</option>
                    <option value="November">Noviembre</option>
                    <option value="December">Diciembre</option>
                </select>
                <input type="submit" class="botonsection">
            </form>
            <div style="text-align: center; display: flex; justify-content:center ; margin-top: 20px;">
            <table style="border: 1px solid #000;">
                            <tr>
                                <th style='border: 1px solid #000; vertical-align: center; text-align: center; padding:5px;'>Nombre del servicio</th>
                                <th style='border: 1px solid #000; vertical-align: center; text-align: center;'>Cantidad de ventas</th>
                                <th style='border: 1px solid #000; vertical-align: center; text-align: center;'>Fecha</th>
                            </tr>

                        </table>
            </div>

    </div>

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