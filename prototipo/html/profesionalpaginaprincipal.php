
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesional página principal</title>
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
        <a href="profesionalpaginaprincipal.php"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.php" style="justify-content: flex-end; ">Cerrar sesión</a>
    </nav>

    <div class="row">
        <aside>
            <div class="divaside ">
                <h4>Nombre usuario</h4>
                <a href="profesionaldiagnostico.php"><button type="button " class="botones ">Diagnóstico inicial </button></a><br>
                <a href="profesionalhistoriaclinica.php"><button type="button " class="botones ">Historia clínica</button></a><br>
            </div>
        </aside>

        <section>
            <h4 style="text-align: center; ">PAGINA PRINCIPAL PROFESIONAL</h4>
            <table>
                <tr>
                    <th style="text-align:center ; "></th>
                    <th style="text-align:center; justify-content: center; " colspan="2 "></th>
                </tr>
                <tr>
                    <td></td>
                    <td style="width: 70%; ">
                        <p>Acá podrá hacer el diagnóstico inicial y hacer su historia clínica.</p>

                    </td>
                    <td>
                        <div style="display: flex; align-items: center; flex-direction: column; ">
                            <img src=" ../recursos/images/enfermera.jpg " alt="Enfermera " style="width: 100px; height: 100px; margin-top:5px; ">
                            <img src=" ../recursos/images/secretaria.jpg " alt="Enfermera " style="width: 100px; height: 100px; margin-top:5px; ">
                            <img src=" ../recursos/images/enfermero.jpg " alt="Enfermera " style="width: 100px; height: 100px; margin-top:5px; ">
                        </div>
                    </td>
                </tr>

            </table>
        </section>
    </div>

    <footer>
        <div style="display: flex; justify-content: space-around;">
            <div>
                <h1>CECAR</h1>
                <a href=" " style="text-decoration: none; "><img src="../recursos/images/cecarlogo.png " alt="facebook" class="estilogo"></a>
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