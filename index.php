<!-- php connected script -->
<?php
    include('include/connect.php');
    
    $query = "SELECT * FROM articulos";
    
    $result = mysqli_query($conn, $query);
?>
<!-- End php script-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Electronic Art</title>
    <link rel="stylesheet" href="css/main.css"> <!-- css style -->
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
                        <a class="nav-link" href="index.html">Portada</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="entrarArticulo.html">Entrar Articulo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cliente.html">Añadir Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hacerVenta.html">Crear Venta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="listadoDeVenta.html">Listado de Ventas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="singIn.php">SingIn</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- End  -->
    <h1 class="title_table">Electronic Art</h1>
    <h3 class="title_table">Table</h3>
    <main>
    <div class="row">
        <table class="table table-strip table-hover table-bordered row_size">
            <thead class="thead-dark">
                <tr>
                    <th>ID Articulo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <!-- php script -->
            <?php 
                while($row = mysqli_fetch_assoc($result)) {
                    
                    $id_art = $row['idArt'];

                    $nombre = $row['NombreArt'];

                    $descripcion = $row['DescripcionArt'];

                    $imagenArt = $row['ImageArt'];
                    
                    $id_cat = $row['IdCat'];
                    
                    $precio = $row['Precio'];
            ?>
            <!-- End php script -->
            <tr>
                <td><?php echo $id_art; ?></td>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $descripcion; ?></td>
                <div class="card">
                    <td class="image_size">
                        <img class="img-thumbnail" src="<?Php echo $imagenArt; ?>" alt="<?php echo $nombre; ?>">
                    </td>
                </div>
                <td><?php echo $id_cat; ?></td>
                <td><?php echo $precio; ?></td>
                <td>
                    <a href="ver-modificar.php?GetID=<?php echo $id_art;?>" class="btn btn-success">Actualizar</a>
                </td>
                <td>
                    <a onclick="return confirm('Estas seguro que quieres eliminar este articulo?')" href="delete.php?GetID=<?php echo $id_art;?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
        <!-- End php script -->
        </table>
    </div>
    </main>
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>