<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secretaria registro</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
</head>

<body style="background-color: #9CEAEF;;">
    <header>
        <h1>CECAR</h1>
    </header>
    <nav>
        <a href="secretariapaginaprincipal.php"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.php" style="justify-content: flex-end; ">Cerrar sesión</a>
    </nav>

    <div style="text-align: center; justify-content:center ;">
        <h4 style="margin-top: 20px;">DATOS DE LA FACTURA</h4><br><br>
        <form action="../controladores/controladorformulario.php" method="post">
            <div>
                <label>Número de identificación</label><br>
                <input type="text" name="idcliente"> <br><br>
    
                <label for="">Nombre cliente</label><br>
                <input type="text" name="nombre"><br><br>

                <label for="">Apellido cliente</label><br>
                <input type="text" name="apellido"><br><br>

                <label for="">Dirección cliente</label><br>
                <input type="text" name="direccion"><br><br>
            </div>
            <div>
                <label for="">Correo electronico cliente</label><br>
                <input type="text" name="correo"><br><br>

                <label for="">fecha</label><br>
                <input type="date" name="fecha"><br><br>
                <input type="text" name="controlador" value="factura" hidden>
                <input type="submit" name="operacion" value="facturar" class="botonsection"><br><br><br>
        </form>

        </div>
    </div>
    
    <footer>
        <div style=" display: flex; justify-content: space-around; ">
            <div>
                <h1>CECAR</h1>
                <a href=" " style="text-decoration: none; "><img src="../recursos/images/cecarlogo.png " alt="facebook " class="estilogo "></a>
            </div>
            <div>
                <ul>
                    <h6>Contactanos</h6>
                    <div>
                        facebook
                        <a href=" " style="text-decoration: none; "><img src="../recursos/images/facebook.png " alt="facebook " c></a><br>Instagram
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