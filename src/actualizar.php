<?php

include('include/connect.php');

$id_art = $_GET['id_art'];

$nombre = $_POST['nombre'];

$descripcion = $_POST['descripcion'];

$imageArt = $_POST['imageArt'];

$precio = $_POST['precio'];

$id_cat = $_POST['id_cat'];

$query = "UPDATE articulos SET nombre = '$nombre', descripcion = '$descripcion',
imageArt = '$imageArt', id_cat = '$id_cat', precio = '$precio' WHERE id_art = '$id_art' ";

$result = $connect->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-3.4.1.min.js"></script>
	<title>Modificar Articulo</title>
</head>
<body>
    <?php if($result > 0) { ?>

        <h1> Articulo Modificado </h1>
    
    <?php header("location: index.php"); ?>
    
    <?php }else{?>
    
        <h1> Error al Modificar Articulo <h1>
    
    <?php } ?>

    <?php mysqli_close($connect); ?>
    
    <a href="index.php"> Regresar</a>
    
</body>
</html>