<?php 

include('include/connect.php');

$nombre = $_POST["NombreArt"];
$descripcion = $_POST["DescripcionArt"];
$image = $_POST["ImageArt"];
$idCat = $_POST["IdCat"];
$precio = $_POST["Precio"];

$query = "INSERT INTO articulos (NombreArt, DescripcionArt, ImageArt, IdCat, Precio) 
VALUES ('$nombre', '$descripcion', '$image', '$idCat', '$precio')";

$result = mysqli_query($conn, $query);

if($result > 0) {
    header("location: index.php");
} else {
    echo "Error: ". $query . "<br>" > $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
<title>Electronic Art</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/main.css"> <!-- Css style -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

<body>
<div class="container">
    Welcome <br>
    <?php echo $nombreArt; ?><br>
    <?php echo $descripcionArt; ?><br>
    <?php echo $idCat; ?><br>
    <?php echo $precio;?>
    <a href="entrar-articulo.php" class="btn btn-primary">Regresar</a>

</div>
    <!-- bootstrap script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>