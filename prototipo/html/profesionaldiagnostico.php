<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diagnóstico Inicial</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
    <script src="../js/funcionalidad.js"></script>
    <script>
        function inputServicio(){

        var tagHTML = crearTag("input");
        tagHTML.type = "text";
        tagHTML.name = "servicio[]";

        return tagHTML;
    }

        function agregar() {

            var cuerpo = document.getElementById("cuerpo");
            var service = document.getElementById("service").value;

            var inputUno = inputServicio();
            inputUno.setAttribute("value", service);
            inputUno.readOnly  = true;

            var eliminar = document.createElement("input");
            eliminar.type = "button";
            eliminar.value = "Eliminar";
            eliminar.className = "btn btn-danger";
            eliminar.onclick = function() {
            tr.remove();
            };

            let tr = document.createElement("tr");
            tr.append(inputUno, eliminar)

            cuerpo.append(tr);

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
                <a href="profesionalhistoriaclinica.php"><button type="button " class="botones ">Historia clínica</button></a>
            </div>
        </aside>

        <section>
            <h4 style="text-align: center; ">DIAGNÓSTICO INICIAL</h4>
            <div style="text-align: center;display: flex;justify-content:space-evenly; margin-top:20px;">
                <div>
                    <form action="../controladores/controladorformulario.php" method="post" id="usrform">

                        <label for="">Número de identificación</label><br>
                        <input type="text" name="id"><br><br>

                        <label for="">Tipo de identificacion</label><br>
                        <select name="tipos" id="lang">
                        <option value="Cedula">cedula</option>
                        <option value="tarjeta de identidad">tarjeta de identidad</option>
                        <option value="cedula de extranjeria">cedula de extranjeria</option>

                        </select><br><br>

                        <label for="">Peso</label><br>
                        <input type="text" name="peso"><br><br>

                        <label for="">Presión arterial sistolica</label><br>
                        <input type="text" name="puno"><br><br>

                        <label for="">Presión arterial diastolica</label><br>
                        <input type="text" name="pdos"><br><br>

                        <label for="">Derivación</label><br>
                        <input type="text" name="derivacion"><br><br>

                        <label for="">Diagnóstico</label><br>
                        <textarea name="diagnostico" cols="23" rows="2" form="usrform"></textarea><br><br>
                
                        <label for="">Número de sesiones recomendadas</label><br>
                        <input type="text" name="sesion"><br> <br>
                        
                        <table style="border: 1px solid #000;">
                            <thead>
                                <th>Codigo Servicio y Codigo Elemento</th>
                            </thead>
                            <tbody id="cuerpo">

                            </tbody>
                        </table> <br>
                        
                        <input type="text" name="controlador" value="profesional" hidden>
                        <input type="text" name="operacion" value="guardar" hidden>

                        <button type="submit" class="botonsection">Guardar</button>
                    </form>
                </div>

                <div>
                        <label for="">Servicios que se aplicaran</label><br>
                        <?php

                            include '../controladores/controladorservicio.php';
                            $controladorCliente = new ControladorServicios();
                            $resultado = $controladorCliente->listarDatos();
                            echo "<select name='servicio' id='service'>";
                            while ($fila = $resultado->fetch_assoc()) {
                                echo "<option value=".$fila['idServicio'].">".$fila['nombreServicio']."</option>";
                            }
                            echo "</select>";

                            ?>
                            <input type="button" onclick="agregar()" value="Agregar" class="botonsection">
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