<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Definir servicios</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="../js/funcionalidad.js"></script>
    <script>
        function inputServicio(){

        var tagHTML = crearTag("input");
        tagHTML.type = "text";
        tagHTML.name = "servicio[]";

        return tagHTML;
    }

    function inputElemento(){

        var tagHTML = crearTag("input");
        tagHTML.type = "text";
        tagHTML.name = "elemento[]";

        return tagHTML;
    }
        function agregar() {

            var cuerpo = document.getElementById("cuerpo");
            var service = document.getElementById("service").value;
            var element = document.getElementById("element").value;

            var inputUno = inputServicio();
            inputUno.setAttribute("value", service);
            inputUno.readOnly  = true;

            var inputDos = inputElemento();
            inputDos.setAttribute("value", element);
            inputDos.readOnly  = true;

            var eliminar = document.createElement("input");
            eliminar.type = "button";
            eliminar.value = "Eliminar";
            eliminar.className = "btn btn-danger";
            eliminar.onclick = function() {
            tr.remove();
            };

            let tr = document.createElement("tr");
            tr.append(inputUno, inputDos ,eliminar)

            cuerpo.append(tr);

        }
    </script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8 " crossorigin="anonymous "></script>

    <header>
        <h1>CECAR</h1>
    </header>

    <nav>
        <a href="gerentepaginaprincipal.html"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.html" style="justify-content: flex-end; ">Cerrar sesión</a>
    </nav>

    <div class="row">

        <section>
            <h4 style="text-align: center;">Definir materias primas por servicio</h4>
            
            <div style="text-align: center; display: flex; justify-content:space-evenly; margin-top:15px;">
                <div class="divFormularios">
                    <div>
                            <label for="">Escoja un servicio</label><br>
                            <?php 
                                include_once "../controladores/controladorservicio.php";

                                echo "<select name='servicio' id='service'>";
                                $controladorServicio = new ControladorServicios();
                                $resultado = $controladorServicio->listarDatos();
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<option value=".$fila['idServicio'].">".$fila['nombreServicio']."</option>";
                                }
                                echo "</select>";
                            ?>
                            
                            <br><br>

                            <label for="">Establezca los elementos del servicio</label><br>
                            <?php 
                                include_once "../controladores/controladorelemento.php";

                                echo "<select name='elemento' id='element'>";
                                $controladorElemento = new ControladorElementos();
                                $resultado = $controladorElemento->listarDatos();
                                while ($fila = $resultado->fetch_assoc()) {
                                    echo "<option value=".$fila['idElemento'].">".$fila['nombre']."</option>";
                                }
                                echo "</select>";
                            ?>
                            <br><br>
                            <input type="button" value="Agregar" class="botonsection" onclick="agregar()">
                    </div>
                </div>

                <div>
                    <form action="../controladores/controladorformulario.php" method="post">
                    <table style="border: 1px solid #000;">
                            <thead>
                                <th>Codigo Servicio y Codigo Elemento</th>
                            </thead>
                            <tbody id="cuerpo">

                            </tbody>
                    </table>
                    <input type="text" hidden name="controlador" value="servicioelemento">
                    <input type="text" hidden name="operacion" value="guardar">
                    <input type="submit" value="Guardar" class="botonsection">
                    </form>
                </div>

            </div>
            <h4>Listado de elementos por servicio</h4>
            <table>
            <?php 
                include_once "../controladores/controladorservicioselementos.php";
                $controladorElemento = new ControladorServiciosElementos();
                $resultado = $controladorElemento->listarDatos();
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<tr border: 1px solid #000;>";
                    echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['idServicio']."</td>";
                    echo "<td style='border: 1px solid #000; vertical-align: center; text-align: center;'>".$fila['idElemento']."</td>";
                    echo "<td border: 1px solid #000;> <br>
                    
                    <div>
                    <form action='../controladores/controladorformulario.php' method='post'>
                    <input type='number' name='servicio' value=". $fila['idServicio'] ." hidden>
                    <input type='text' name='elemento' value=". $fila['idElemento'] ." hidden>
                    <input type='text' name='controlador' value='servicioelemento' hidden>
                    <td border: 1px solid #000;><input type='submit' name='operacion' value='eliminar' class='btn btn-info botonTamaño' style='margin-right:5px'></td>
                    </form> 
                    </div>
                    
                    </td>";
                    echo "</tr>";
                }
            ?>
            </table>
            
        </section>
    </div>

    <footer>
        <div style="display: flex; justify-content: space-around;">
            <div>
                <h1>CECAR</h1>
                <a href=" " style="text-decoration: none;"><img src="../recursos/images/cecarlogo.png   " alt="facebook" class="estilogo"></a>
            </div>
            <div>
                <ul>
                    <h6>Contactanos</h6>
                    <div>
                        facebook
                        <a href=" " style="text-decoration: none;"><img src="../recursos/images/facebook.png" alt="facebook"></a><br>Instagram
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

</html>