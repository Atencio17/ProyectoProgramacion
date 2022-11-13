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
        <a href="administradorpaginaprincipal.html"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.html" style="justify-content: flex-end; ">cerrar sesión</a>
    </nav>

    <div class="row">


        <section>
           <div class="col">
            <h4 style="text-align: center; ">CATEGORIAS</h4>
            <div style="text-align: center; display: flex; justify-content:center ;">
                <form action="../controladores/controladorformulario.php" method="post">
                    <div>
                        <label for="exampleInputEmail1 " class="form-label " style="margin-top: 15px;">Identificador de la categoria</label><br>
                        <input type="number" id="usuario " aria-describedby="emailHelp " name="codigo" value="<?php echo isset($_POST['codigo']) ? $_POST['codigo'] : '';?>">

                    </div>
                    <div>
                        <label for="exampleInput Password1 " class="form-label ">Nombre de la categoria</label><br>
                        <input type="text" id="contrasena " name="nombre" value="<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : '';?>">
                    </div>
                    <input type="text" value="categoria" hidden name="controlador">
                    <input type="submit" class="btn btn-info botonTamaño " value="guardar" style="margin-top: 20px;" name="operacion"></input>
            </div>



            </form>
           </div>

    <div>

    <h1>Listado Categorias</h1>

    <table>

        <tr>

            <th>Codigo</th>
            <th>Nombre</th>

        </tr>

        <?php

            include '../controladores/controladorcategoria.php';
            $controladorCliente = new ControladorCategorias();
            $resultado = $controladorCliente->listarDatos();
            while ($fila = $resultado->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$fila['idCategoria']."</td>";
                echo "<td>".$fila['Categoria']."</td>";
                echo "<td> <br>
                <form action='../controladores/controladorformulario.php' method='post'>
                <input type='number' name='codigo' value=". $fila['idCategoria'] ." hidden>
                <input type='text' name='nombre' value=". $fila['Categoria'] ." hidden>
                <input type='text' name='controlador' value='categoria' hidden>
                <input type='submit' name='operacion' value='eliminar'>
                </form> 

                <form action='../vistas/administradorcategorias.php' method='post'>
                <input type='number' name='codigo' value=". $fila['idCategoria'] ." hidden>
                <input type='text' name='nombre' value=". $fila['Categoria'] ." hidden>
                <input type='submit' value='editar'>
                </form>
                </td>";
                echo "</tr>";
                
            }

        ?>

    </table>
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