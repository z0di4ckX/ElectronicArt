<?php
    include('include/connect.php');
    
    $query = "SELECT * FROM venta";
    
    $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electronic Art</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
</head>
<body>
<!-- navigation -->
<header>
    <div class="container p-0">
        <nav class="navbar navbar-expand-lg">
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
    <h1>Electronic Art</h1>
    <h3>Categoria</h3>
    <!-- Start card Categoria -->
    <div class="card w-75">
        <div class="card-body">
            <h5 class="card-title">Categoria</h5>
            <form class="card-text">
                <div class="form-row">
                    <label for="exampleFormControlInput1">Cliente</label>
                    <select class="form-control">
                        <option>Selecionar Cliente</option>
                    </select>
                    <br />
                    <label for="exampleFormControlInput1">Articulo</label>
                    <select class="form-control">
                        <option>Seleccionar Articulos</option><br />
                    </select>
                    <label for="exampleFormControlInput1">Fecha de Venta</label>
                    <select class="form-control">
                        <option>dd/mm/aaaa</option>
                    </select>
                    <div class="col-auto my-1">
                        <br />
                        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Cantidad</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Cantidad...</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
            </form>
            <br />
            <a class="btn btn-success" href="#">Continuar</a>
            <a class="btn btn-primary" href="index.html">Regresar</a>
        </div>
    </div>
    <!-- End -->
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>