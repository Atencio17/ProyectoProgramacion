<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definir evolución</title>
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
        <a href="administradorpaginaprincipal.html"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.html" style="justify-content: flex-end; ">Cerrar sesión</a>
    </nav>

    <div class="row">


        <section>


            <form action="../controladores/controladorformulario.php" method="post">
            <h4 style="text-align: center; ">DEFINICION DE EVOLUCION DE TRATAMIENTOS</h4>


            <div style="text-align: center; display: block; justify-content:center ;">
                <label>Servicio: </label><br>
                
        <?php

            include '../controladores/controladorservicio.php';
            $controladorCliente = new ControladorServicios();
            $resultado = $controladorCliente->listarDatos();
            echo "<select name='servicio' id=''>";
            while ($fila = $resultado->fetch_assoc()) {
                echo "<option value=".$fila['idServicio'].">".$fila['nombreServicio']."</option>";
            }
            echo "</select>";

        ?>
        
            </div>


            </select>

            <div style="text-align: center; display: flex; justify-content:center ;">

                <div style="margin: 10px;">

                    <h5>Reglas de evolución</h5>

                    <label for="">Presión sistolica</label><br>
                    <input type="number" name="presionUno"><br><br>

                    <label for="">Presión diastólica</label><br>
                    <input type="number" name="presionDos"><br><br>

                    <label>Peso</label><br>
                    <input type="number" name="peso"> <br><br>

                </div>
            </div>
            <input type='text' name='controlador' value='evolucion' hidden>
            <div style="display: flex; align-items:center; flex-direction: column;">
                <div>
                    <input type="submit" class="btn btn-info botonTamaño " value="guardar" style="margin-top: 10px;" name="operacion"></input>
                </div>


            </div>
            </form>
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