<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Importe ganancias por servicio</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="stylesheet" href="../css/grafica.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
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
                <a href="gerentereportedeventas.php"><button type="button " class="botones ">Reporte de ventas</button></a><br>
                <a href="gerenteregistroempleados.php"><button type="button " class="botones ">Registrar empleados</button></a><br>
                <a href="gerentedefinirservicio.php"><button type="button " class="botones ">Definir servicios</button></a><br>
                <a href="gerentereportedeganancias.php"><button type="button " class="botones ">Reporte de ganancias</button></a><br>
                <a href="gerenteserviciosatendidospormes.php"><button type="button " class="botones ">Servicios atendidos por mes</button></a>
                </a>
            </div>
        </aside>

        <section>

            <h4 style="text-align: center; ">Importe de ganancias por servicios</h4>

                    <!-- HTML -->
            <div id="chartdiv"></div>

        </section>



        <footer>
            <div style="display: flex; justify-content: space-around;">
                <div>
                    <h1>CECAR</h1>
                    <a href=" " style="text-decoration: none;"><img src="../recursos/images/cecarlogo.png " alt="facebook"></a>
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

<!-- Styles -->
<style>
#chartdiv {
  width: 100%;
  height: 500px;
}
</style>

<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
<script>
am5.ready(function() {

// Create root element
// https://www.amcharts.com/docs/v5/getting-started/#Root_element
var root = am5.Root.new("chartdiv");


// Set themes
// https://www.amcharts.com/docs/v5/concepts/themes/
root.setThemes([
  am5themes_Animated.new(root)
]);


// Create chart
// https://www.amcharts.com/docs/v5/charts/xy-chart/
var chart = root.container.children.push(am5xy.XYChart.new(root, {
  panX: true,
  panY: true,
  wheelX: "panX",
  wheelY: "zoomX",
  pinchZoomX:true
}));

// Add cursor
// https://www.amcharts.com/docs/v5/charts/xy-chart/cursor/
var cursor = chart.set("cursor", am5xy.XYCursor.new(root, {}));
cursor.lineY.set("visible", false);


// Create axes
// https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
xRenderer.labels.template.setAll({
  rotation: -90,
  centerY: am5.p50,
  centerX: am5.p100,
  paddingRight: 15
});

var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
  maxDeviation: 0.3,
  categoryField: "country",
  renderer: xRenderer,
  tooltip: am5.Tooltip.new(root, {})
}));

var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
  maxDeviation: 0.3,
  renderer: am5xy.AxisRendererY.new(root, {})
}));


// Create series
// https://www.amcharts.com/docs/v5/charts/xy-chart/series/
var series = chart.series.push(am5xy.ColumnSeries.new(root, {
  name: "Series 1",
  xAxis: xAxis,
  yAxis: yAxis,
  valueYField: "value",
  sequencedInterpolation: true,
  categoryXField: "country",
  tooltip: am5.Tooltip.new(root, {
    labelText:"{valueY}"
  })
}));

series.columns.template.setAll({ cornerRadiusTL: 5, cornerRadiusTR: 5 });
series.columns.template.adapters.add("fill", function(fill, target) {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});

series.columns.template.adapters.add("stroke", function(stroke, target) {
  return chart.get("colors").getIndex(series.columns.indexOf(target));
});


// Set data
var data = [
    <?php
        include_once('../controladores/controladorservicio.php');
        $controladorGenerico = new ControladorServicios();
        $resultado = $controladorGenerico->importe();
        while ($fila = $resultado->fetch_assoc()){
          echo'{country: "'.$fila['nombre'].'",';
          echo"value: ".intval($fila['importe'])."},";
        } 
    ?>
    
];

xAxis.data.setAll(data);
series.data.setAll(data);


// Make stuff animate on load
// https://www.amcharts.com/docs/v5/concepts/animations/
series.appear(1000);
chart.appear(1000, 100);

}); // end am5.ready()
</script>