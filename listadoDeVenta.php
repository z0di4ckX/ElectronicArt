<?php

include('include/connect.php');

$clientQuery = "SELECT * FROM cliente";
$resultClient = mysqli_query($conn, $clientQuery);

$articuloQuery = "SELECT * FROM articulos";
$resultArticulo = mysqli_query($conn, $articuloQuery);
?>
<html>

<head>
<title>Electronic Art</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/main.css"> <!-- Css style -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
</head>

<body>

<div class="container">
<header>
    <div class="container p-0">
        <nav class="navbar navbar-expand-lg navigation_bar">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Portada</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="entrarArticulo.php">Entrar Articulo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cliente.php">Añadir Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hacerVenta.php">Crear Venta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listadoDeVenta.php">Hacer una compra</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
    <div class="row">
        <h1> Hacer una Venta </h1>
    </div>
<form action="carritoDeCompra.php" method="POST">
    <div class="form-group">
        <label for="Cliente"> Seleccionar Cliente </label>
        <select name="idCliente" class="form-control">
            <option value="" SELECTED> Seleccionar Cliente </option>
            <?php
            while($row = $resultClient->fetch_assoc()) {
                $id_cliente = $row['idCliente'];
                $nameCliente = $row['Nombre'] .' '. $row['Apellidos'];
                echo "<option value='$id_cliente'>$id_cliente.&nbsp;$nameCliente</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group">
        <label for="Articulo"> Seleccionar Articular </label>
        <select name="idArt" class="form-control">
            <option value="" SELECTED> Seleccionar Articulo </option>
            <?php
            while($row = $resultArticulo->fetch_assoc()) {
                $id_art = $row['idArt'];
                $nameArt = $row['NombreArt'] .' $'. $row['Precio'];
                echo "<option value='$id_art'>$id_art.&nbsp;$nameArt</option>";
            }
            ?>
        </select>
    </div>

    <div class="form-group">
        <label for="fecha"> Fecha Venta: </label>
        <input type="date" class="form-control" name="FechaCompra"> </input>
    </div>

    <div class="form-group">
        <label for="cantidad"> Cantidad </label>
        <input type="number" class="form-control" name="Cantidad" step="1">
    </div>
    <button type="submit" class="btn btn-success"> Continuar </button>
    <a href="index.php" class="btn btn-danger"> Regresar </a>
</form>

</div>

    <!-- bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>

</html>