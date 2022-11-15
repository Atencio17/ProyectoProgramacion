<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias primas y reactivos administrador</title>
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
            <div class="col">
                <div style="text-align: center; display: flex; justify-content:space-evenly;">

                    <form action="../controladores/controladorformulario.php" method="post" id="usrform">
                    <h4 style="text-align: center; ">MATERIAS PRIMAS Y REACTIVOS</h4>
                        <div>
                            <label for="exampleInputEmail1 " class="form-label " style="margin-top: 15px;">Identificador del reactivo o materia prima</label><br>
                            <input type="text " id="usuario " aria-describedby="emailHelp " name="codigo" value="<?php echo isset($_POST['codigo']) ? $_POST['codigo'] : '';?>">
                        </div>
                        <div>
                            <label for="exampleInput Password1 " class="form-label ">nombre</label><br>
                            <input type="text " id="contrasena " name="nombre" value="<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : '';?>">
                        </div>
                        <div>
                            <label for="exampleInput Password1 " class="form-label ">Costo</label><br>
                            <input type="number " name="costo" value="<?php echo isset($_POST['costo']) ? $_POST['costo'] : '';?>">
                        </div>

                        <div>
                            
                            <label for="exampleInput Password1 " class="form-label ">Descripción</label><br>
                            <textarea id=" " cols="30 " rows="2" name="descripcion" value="<?php echo isset($_POST['descripcion']) ? $_POST['descripcion'] : '';?>" form="usrform"></textarea>
                            
                        </div>

                        <input type="submit" class="btn btn-info botonTamaño " value="guardar" style="margin-top: 10px;" name="operacion"></input>
                        <input type='text' name='controlador' value='elemento' hidden>
                    </form>

                    <div>

                        <h4>LISTADO MATERIAS PRIMAS Y REACTIVOS</h4>
                        <div style="overflow-x:auto; max-width: 600px;">
                            <table style="border: 1px solid black;">
                                <tr>
                                    <th style='border: 1px solid #000; vertical-align: center; text-align: center; padding:5px;'>Código</th>
                                    <th style='border: 1px solid #000; vertical-align: center; text-align: center;'>Nombre</th>
                                    <th style='border: 1px solid #000; vertical-align: center; text-align: center;'>Costo</th>
                                    <th style='border: 1px solid #000; vertical-align: center; text-align: center;'>Descripción</th>
                                    <th colspan=3 style='border: 1px solid #000; vertical-align: center; text-align: center;'>Acción</th>
                                </tr>

                            <?php
                                include '../controladores/controladorelemento.php';
                                $controladorCliente = new ControladorElementos();
                                $resultado = $controladorCliente->listarDatos();
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<tr border: 1px solid #000;>";
                                    echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['idElemento']."</td>";
                                    echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['nombre']."</td>";
                                    echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['costo']."</td>";
                                    echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['descripcion']."</td>";
                                    echo "<td border: 1px solid #000;> <br>

                                    <div>
                                        <form action='../controladores/controladorformulario.php' method='post'>
                                        <input type='number' name='codigo' value=". $fila['idElemento'] ." hidden>
                                        <input type='text' name='nombre' value=". $fila['nombre'] ." hidden>
                                        <input type='text' name='costo' value=". $fila['costo'] ." hidden>
                                        <input type='text' name='descripcion' value=". $fila['descripcion'] ." hidden>
                                        <input type='text' name='controlador' value='elemento' hidden>
                                        <td border: 1px solid #000;><input type='submit' name='operacion' value='eliminar' class='btn btn-info botonTamaño' style='margin-right:5px'></td>
                                        </form> 
                                    </div>
                                    <div>
                                        <form action='../html/administradormateriasprimas.php' method='post'>
                                        <input type='number' name='codigo' value=". $fila['idElemento'] ." hidden>
                                        <input type='text' name='nombre' value=". $fila['nombre'] ." hidden>
                                        <input type='text' name='costo' value=". $fila['costo'] ." hidden>
                                        <input type='text' name='descripcion' value=". $fila['descripcion'] ." hidden>
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