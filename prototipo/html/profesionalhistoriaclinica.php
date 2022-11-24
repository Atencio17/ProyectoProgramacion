<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historia Clínica</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
    <script>
        function activar() {

        }
    </script>
</head>

<body>
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
                <a href="profesionaldiagnostico.php"><button type="button " class="botones ">Diagnóstico inicial</button></a>

            </div>
        </aside>

        <section>
            <h4 style="text-align: center; ">HISTORIA CLÍNICA</h4>
            <div style="text-align: center; margin-top:15px;">
                <form action="../controladores/controladorformulario.php" method="post">
                <label for="">Buscar Paciente</label><br>
                    <input type="number" name="id"> <br>
                    
                    <label for="">Tipo de identificacion</label><br>

                        <select name="tipos" id="lang">
                        <option value="Cedula">cedula</option>
                        <option value="tarjeta de identidad">tarjeta de identidad</option>
                        <option value="cedula de extranjeria">cedula de extranjeria</option>

                    </select><br>
                    <input type="text" name="controlador" value="profesional" hidden>
                    <input type="submit" name="operacion" value="buscar" class="botonsection"><br><br>
                </form>



                <form action="../controladores/controladorformulario.php" method="post">


                    <label for="">Sesiones restantes</label><br>
                    <input type="number" name="sesion" id="text1" value="<?php echo isset($_POST['sesion']) ? $_POST['sesion'] : '';?>" readonly><br><br>
    
                
                    <label for="">Peso</label><br>
                    <input type="number" name="peso" id="text2" value="<?php echo isset($_POST['peso']) ? $_POST['peso'] : '';?>"><br><br>
                
                
                    <label for="">Presión sistolica</label><br>
                    <input type="number" name="puno" id="text3" value="<?php echo isset($_POST['puno']) ? $_POST['puno'] : '';?>"><br><br>
    
                    <label for="">Presión diastólica</label><br>
                    <input type="number" name="pdos" id="text3" value="<?php echo isset($_POST['pdos']) ? $_POST['pdos'] : '';?>"><br><br>
    
                    <label for="">Proxima cita</label><br>
                    <input type="datetime-local" name="cita" id=""><br>

                    <input type="text" name="empleado" value="<?php echo $_SESSION['identificacion']; ?>" hidden>
                    <input type="text" name="cliente" value="<?php echo isset($_POST['cliente']) ? $_POST['cliente'] : '';?>" hidden>
    
                    <input type="text" name="operacion" value="actualizar" hidden>
                    <input type="text" name="controlador" value="citas" hidden>
                    <button type="submit" class="botonsection">Guardar</button>
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