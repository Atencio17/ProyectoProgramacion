<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definir categorias</title>
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
        <a href="administradorpaginaprincipal.php"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.php" style="justify-content: flex-end; ">cerrar sesión</a>
    </nav>

    <div class="row">

        <section>
            <div class="col">
            
                <div style="text-align: center; display: flex; justify-content:space-evenly;">
                
                    <form action="../controladores/controladorformulario.php" method="post">
                    <h4 style="text-align: center; ">CATEGORIAS</h4>
                        <div>
                            <label for="exampleInputEmail1 " class="form-label " style="margin-top: 15px;">Identificador de la categoria</label><br>
                            <input required type="number" id="usuario " aria-describedby="emailHelp " name="codigo" value="<?php echo isset($_POST['codigo']) ? $_POST['codigo'] : '';?>">

                        </div>
                        <div>
                            <label for="exampleInput Password1 " class="form-label ">Nombre de la categoria</label><br>
                            <input required type="text" id="contrasena " name="nombre" value="<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : '';?>">
                        </div>
                        <input  type="text" value="categoria" hidden name="controlador">
                        <input type="submit" class="btn btn-info botonTamaño" value="guardar" style="margin-top: 20px;" name="operacion"></input>
                    </form>
                    <div>

                    <h4>LISTADO CATEGORIAS</h4>

                        <table style="border: 1px solid #000;">
                            <tr>
                                <th style='border: 1px solid #000; vertical-align: center; text-align: center; padding:5px;'>Código</th>
                                <th style='border: 1px solid #000; vertical-align: center; text-align: center;'>Nombre</th>
                                <th colspan=3 style='border: 1px solid #000; vertical-align: center; text-align: center;'>Acción</th>
                            </tr>

                            <?php
                                include '../controladores/controladorcategoria.php';
                                $controladorCliente = new ControladorCategorias();
                                $resultado = $controladorCliente->listarDatos();
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<tr border: 1px solid #000;>";
                                    echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['idCategoria']."</td>";
                                    echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['Categoria']."</td>";
                                    echo "<td border: 1px solid #000;> <br>
                                    
                                    <div>
                                    <form action='../controladores/controladorformulario.php' method='post'>
                                    <input type='number' name='codigo' value=". $fila['idCategoria'] ." hidden>
                                    <input type='text' name='nombre' value=". $fila['Categoria'] ." hidden>
                                    <input type='text' name='controlador' value='categoria' hidden>
                                    <td border: 1px solid #000;><input type='submit' name='operacion' value='eliminar' class='btn btn-info botonTamaño' style='margin-right:5px'></td>
                                    </form> 
                                    </div>
                                    <div>
                                    <form action='../html/administradorcategorias.php' method='post'>
                                    <input type='number' name='codigo' value=". $fila['idCategoria'] ." hidden>
                                    <input type='text' name='nombre' value=". $fila['Categoria'] ." hidden>
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

    

    </section>
</div>
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