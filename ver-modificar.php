<?php include('include/connect.php'); ?> <!-- PHP connect -->

<!-- PHP script -->
<?php $id = $_GET["GetID"];

$query = "SELECT * FROM articulos WHERE idArt = ".$id."";
$result = mysqli_query($conn, $query);

    while($row = mysqli_fetch_assoc($result)) {
        $nombreArt = $row['NombreArt'];
        $descripcion = $row['DescripcionArt'];
        $imageArt = $row['ImageArt'];
        $idCat = $row['IdCat'];
        $precio = $row['Precio'];
    }

?>
<!-- End script -->

<!DOCTYPE html>
<html>
<head>
    <title>Modificar</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css"> <!-- css style -->
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <!-- End css -->
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
                            <a class="nav-link" href="listadoDeVenta.php">Listado de Ventas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="singIn.php">SingIn</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <div class="row">
        <h1> Modificar Articulo </h1>
    </div>
    <div class="row">
    <main>
        <form name="modificar" method="POST" action="actualizar.php?GetID=<?php echo $id ?>">
            <div class="form-group">
                <label for="idArticulo"> ID Articulo </label>
                <small id="idArticulo" class="form-text text-muted"><?php echo $id ?></small>
            </div>
            <div class="form-group">
                <label for="NombreArticulo"> Nombre Articulo </label>
                <input type="text" name="NombreArt" class="form-control" value="<?php echo $nombreArt ?>">
            </div>
            <div class="form-group">
                <label for="Descripcion"> Descripcion </label>
                <input type="text" name="DescripcionArt" class="form-control" value="<?php echo $descripcion ?>">
            </div>
            <div class="form-group">
                <label for="ImageArt"> Image Art </label>
                <input type="text" name="ImageArt" class="form-control" value="<?php echo $imageArt ?>">
            </div>
            <div class="form-group">
                <label for="IdCat"> Id Category </label>
                <input type="text" name="IdCat" class="form-control" value="<?php echo $idCat ?>">
            </div>
            <div class="form-group">
                <label for="Precio"> Precio </label>
                <input type="text" name="Precio" class="form-control" value="<?php echo $precio ?>">
            </div>
            <button type="submit" class="btn btn-success" name="Guardar" value="Actualizar">Submit</button>
            <a class="btn btn-primary" href="index.php">Regresar</a>
        </form>
     </main>
    </div>
</div>
<!-- Start bootstrap script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- End -->
</body>
</html>