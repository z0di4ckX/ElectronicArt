<!-- PHP script connect -->
<?php
    include('include/connect.php');
    
    $query = "SELECT * FROM cliente";
    
    $result = mysqli_query($conn, $query);
?>
<!-- End PHP script -->
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
                        <a class="nav-link" href="listadoDeVenta.php">Hacer una compra</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carritoDeCompra.php">Carrito de compra</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- End -->
    <h1 class="title_table">Electronic Art</h1>
    <h3 class="title_table">Cliente</h3>
    <!-- Start Card Cliente-->
    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title">Cliente</h5>
            <form method="POST" action="queryCliente.php" class="card-text">
                <div class="form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="Nombre" placeholder="Nombre">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="Apellidos" placeholder="Apellidos">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="Tel" placeholder="Telefono">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="Email" placeholder="Email">
                    </div>
                </div>
            </form>
            <br />
            <a herf="#" type="submit" name="submit" value="submit" class="btn btn-success">Enviar</a>
            <a class="btn btn-primary" href="index.html">Regresar</a>
        </div>
    </div>
    <!-- End -->
    <!-- bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>