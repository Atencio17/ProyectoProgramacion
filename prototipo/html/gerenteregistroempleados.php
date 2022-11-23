<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar empleados</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
    <script src="../js/funcionalidad.js" ></script>

    <script lang="JavaScript">
        function agregar() {

            var tbodyEstudios = document.getElementById("tbodyEstudios");
            var estudios = document.getElementById("estudios").value;
            var input = inputTag("input");

            input.setAttribute("value", estudios);
            input.readOnly  = true;

            var eliminar = document.createElement("input");
            eliminar.type = "button";
            eliminar.value = "Eliminar";
            eliminar.className = "btn btn-danger";
            eliminar.onclick = function() {
            tr.remove();
            };

            let tr = document.createElement("tr");
            tr.append(input, eliminar)

            tbodyEstudios.append(tr);

        }

        function agregarDos() {

            var tbodyExperiencia = document.getElementById("tbodyExperiencia");
            var experiencias = document.getElementById("experiencias").value;
            var input = inputTagDos("input");

            input.setAttribute("value", experiencias);
            input.readOnly  = true;

            var eliminar = document.createElement("input");
            eliminar.type = "button";
            eliminar.value = "Eliminar";
            eliminar.className = "btn btn-danger";
            eliminar.onclick = function() {
            tr.remove();
            };

            let tr = document.createElement("tr");
            tr.append(input, eliminar)

            tbodyExperiencia.append(tr);

        }
    </script>

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8 " crossorigin="anonymous "></script>

    <header>
        <h1>CECAR</h1>
    </header>

    <nav>
        <a href="gerentepaginaprincipal.php"><img src="../recursos/images/cecarlogo.png" alt="" style="height: 35px;"></a>
        <a href="iniciodesesion.php" style="justify-content: flex-end; ">Cerrar sesión</a>
    </nav>

    <div class="row">
        <aside>
            <div class="divaside ">
                <h4>Nombre usuario</h4>
                <a href="gerentereportedeventas.html"><button type="button " class="botones ">Reporte de ventas</button></a><br>
                <a href="gerenteimportegananciasporservicio.html"><button type="button " class="botones ">Importe de ganancias por servicio</button></a><br>
                <a href="gerentedefinirservicio.php"><button type="button " class="botones ">Definir servicios</button></a><br>
                <a href="gerentereportedeganancias.html"><button type="button " class="botones ">Reporte de ganancias</button></a><br>
                <a href="gerenteserviciosatendidospormes.html"><button type="button " class="botones ">Servicios atendidos por mes</button></a>
            </div>
        </aside>

        <section>
            <h4 style="text-align: center; ">REGISTRO DE EMPLEADOS</h4>

            <div style="text-align: center; display: flex;justify-content:space-evenly; margin-top:20px;">
                    
                <form action="../controladores/controladorformulario.php" method="post">
                    <div style="text-align: center; display: flex;justify-content:space-evenly; margin-top:20px;">

                        <!-- Abre parte izquierda -->
                        <div>
                        <label for="">Tipo de usuario</label> <br>

                        <select name="usuarios" id="lang">
                        <option value="S">secretaria</option>
                        <option value="P">profesional</option>
                        <option value="A">administrador</option>
                        <option value="G">gerente</option>
                        </select> <br> <br>

                        <label for="">Tipo de identificación</label> <br>

                        <select name="tiposidentificacion" id="lang">
                        <option value="Cedula">Cédula</option>
                        <option value="tarjeta de identidad">Tarjeta de identidad</option>
                        <option value="cedula de extranjeria">Cedula de extranjeria</option>
                        </select> <br> <br>

                        <label for="">Numero identificación</label> <br>
                        <input type="number" name="identificacion"> <br> <br>

                        <label for="">Nombres</label> <br>
                        <input type="text" name="nombre"> <br> <br>

                        <label for="">Apellidos</label> <br>
                        <input type="text" name="apellido"> <br><br>

                        <label for="">Numero de teléfono</label> <br>
                        <input type="number" name="celular"> <br><br>

                        <label for="">Contraseña</label><br>
                        <input type="text" name="password"> <br><br>

                        <label for="">Confirmar Contraseña</label><br>
                        <input type="text" name="passwordconfirm"><br><br>

                        <input type="text" name="controlador" value="empleado", hidden>

                        <input type="submit" class="btn btn-info botonTamaño" value="registrar" style="margin-top: 20px;" name="operacion"></input>

                        </div>
                        <!-- Cierra parte izquierda -->

                        <!-- Empieza la parte derecha -->
                        <div style="text-align: center; display: flex; justify-content:space-evenly;">
                        
                            <div style="margin-right:20px; margin-left:30px;">
                                <input type="text" placeholder="Estudios" name="estudios" id="estudios"><br>
                                <input type="button" class="btn btn-info botonTamaño" value="agregar estudios" style="margin-top: 20px;" onclick="agregar()">

                                <table id="tabla">
                                    <thead>
                                    <th style="text-align:center;">Estudios</th>
                                    </thead>

                                    <tbody id="tbodyEstudios">

                                    </tbody>

                                </table>
                            </div>
                            
                            <div>
        
                                <input type="text" placeholder="Experiencia" name="experiencias" id="experiencias"><br>
                                <input type="button" class="btn btn-info botonTamaño " value="agregar Experiencia" style="margin-top: 20px;" onclick="agregarDos()"></input>

                                <table id="tablaDos">

                                    <thead>
                                    <th style="text-align:center;">Experiencias</th>
                                    </thead>

                                    <tbody id="tbodyExperiencia">

                                    </tbody>

                                </table>
                            </div>

                        </div>
                        <!-- Cierra la parte derehca -->

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
