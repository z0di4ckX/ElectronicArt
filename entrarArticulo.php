<!-- PHP script connect -->
<?php
    include('include/connect.php');

    $query = "SELECT * FROM categoria";
    
    $result = mysqli_query($conn, $query);
?>
<!-- End php script -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electronic Art</title>
    <link rel="stylesheet" href="css/main.css"> <!-- Css style -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
</head>
<body>
<!-- Start navigation -->
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
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- End -->
    <h1 class="title_table">Electronic Art</h1>
    <h3 class="title_table">Entrada de Inventario</h3>
    <!-- Start Card Entrar Articulo -->
    <main>
    <div class="card w-75">
        <div class="card-body p-10">
            <h5 class="card-title">Nombre de Articulo</h5>
            <form name="modificar" method="POST" action="entrarArticulo1.php" class="card-text">
                <div class="form-row">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                        </div>
                        <input type="text" name="NombreArt" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="DescripcionArt" rows="6" placeholder="Description..."></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default" name="ImageArt">Imagen Del Articulo</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label for="IdCat" class="input-group-text">ID Category</label>
                            <select class="form-control" id="inputGroup-sizing-default" name="IdCat">
                                <option value="" SELECTED> Seleccionar Categoria </option>
                                <?php
                                while($row = $result->fetch_assoc()) {
                                    $id_cat = $row['idCat'];
                                    $namecat = $row['NombreCat'];
                                    echo "<option value='$id_cat'>$id_cat.&nbsp;$namecat</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default" name="Precio">Precio</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </form>
            <br />
            <button type="submit" name="submit" value="submit" class="btn btn-success">Enviar</button>
            <a class="btn btn-primary" href="index.php">Regresar</a>
        </div>
    </div>
    </main>
    <!-- End -->
    <!-- bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</htmlphp