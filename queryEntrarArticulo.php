<!-- PHP script -->
<?php 
    include('include/connect.php');

    $nombre = $_POST["NombreArt"];
    $descripcion = $_POST["DescripcionArt"];
    $imagenArt = $_POST["ImageArt"];
    $id_cat = $_POST["IdCat"];
    $precio = $_POST["Precio"];

    $query = "INSERT INTO articulos (NombreArt, DescripcionArt, ImageArt, IdCat, Precio) 
    VALUES ('$nombre', '$descripcion', '$imagenArt', '$id_cat', '$precio')";

    $result = mysqli_query($conn, $query);

    if($result > 0) {
        echo "New Record Succesfully Created";
    } else {
        echo "Error: ". $query . "<br>" > $conn->error;
    }

    $conn->close();
?>
<!-- End PHP script -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css"> <!-- css style -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <title>Electronic Art</title>
</head>
<body>
    <div class="conteiner">
        <h1 class="title_table">Bienvenido</h1> 
            <?php echo $nombre; ?><br>
            <?php echo $descripcion; ?><br>
            <?php echo $id_cat; ?><br>
            <?php echo $precio;?>
            <a href="entrarArticulo.php" class="btn btn-primary">Regresar</a>
    </div>
    <!-- Start bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>