<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factura</title>
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
    <link rel="shortcut icon" href="../recursos/images/cecarlogo.png">
</head>

<body style="margin-left: 15%; margin-right: 15%;">
    <h1 style="text-align: center;">FACTURA</h1>
    <div style="justify-content: space-between; display: flex;">
        <label for="">Número de factura</label>
        <label for="">Fecha de la factura: <?php echo $_POST['fecha']; ?></label>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div style="justify-content: space-between; display: flex;">
        <div>
            <label for="">Cliente: <?php echo $_POST['nombre']; ?></label><br>
            <label for="">Identificación: <?php echo $_POST['idcliente']; ?></label><br>
            <label for="">Dirección: <?php echo $_POST['direccion']; ?></label><br>
            <label for="">Correo electrónico: <?php echo $_POST['correo']; ?></label><br>
        </div>
        <div>
            <H1 style="margin-right: 70px;">CECAR</H1>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <Div>
        <table style="width: 100%; justify-content: space-between;">
            <th style="text-align: left;">Servicio</th>
            <th style="text-align: left;">Precio unidad</th>
            <th style="text-align: left;">Cantidad</th>
            <th style="text-align: left;">Subtotal</th>
            <tr>
                <td>Alcohol</td>
                <td>2333</td>
                <td>2</td>
                <td>4666</td>
            </tr>
            <tr>
                <td>Suero</td>
                <td>6000</td>
                <td>1</td>
                <td>6000</td>
            </tr>
            <tr>
                <td>Queso</td>
                <td>50000</td>
                <td>3</td>
                <td>150000</td>
            </tr>
        </table>
    </Div>
</body>

</html>