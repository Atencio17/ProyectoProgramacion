<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificacion</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
</head>

<body style="background-color: #68D8D6;">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8 " crossorigin="anonymous "></script>

    <header>
        <h1>CECAR</h1>
    </header>

    <div class="row">

        <h1 style="text-align: center; padding-top: 25;">VERFICACION</h1>
        <div class="col">
            <div class="container-fluid colorHeaderAndFooter">
                <div class="position-absolute top-50 start-50 translate-middle fondoDivLogueo divContainerLogin">
                    <form action="../controladores/controladorformulario.php" method="post">
                        <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Codigo de teléfono</label>
                            <input type="number" class="form-control " name="codigoUno" aria-describedby="emailHelp">

                        </div>
                        <div class="mb-3 ">
                            <label for="exampleInputPassword1" class="form-label">Codigo correo electronico</label>
                            <input type="number" class="form-control " name="codigoDos">
                        </div>


                        <input type="submit" class="btn btn-info botonTamaño" value="Verificar" name="controlador"></input>
                        <input type="text" name="operacion" value="guardar" hidden>

                        <?php
                        echo "<input type='text' value=".$_POST['codigoCelular']." name='codigocelular' hidden>";
                        echo "<input type='text' value=".$_POST['codigoCorreo']." name='codigocorreo' hidden>";
                        echo "<input type='text' value=".$_POST['identificacion']." name='identificacion' hidden>";
                        echo "<input type='text' value=".$_POST['tipoIdentificacion']." name='tipo' hidden>";
                        ?>
                    </form>
                </div>
            </div>
        </div>

    </div>

    </div>

    <div>

    </div>

    <footer>
        <div style="display: flex; justify-content: space-around; ">
            <div>
                <h1>CECAR</h1>
                <a href="" style="text-decoration: none; "><img src="../recursos/images/cecarlogo.png " alt="facebook " class="estilogo "></a>
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