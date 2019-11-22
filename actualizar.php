<?php

include('include/connect.php');

$id_art = $_GET['idArt'];

$nombre = $_POST['NombreArt'];

$descripcion = $_POST['DescripcionArt'];

$imageArt = $_POST['ImageArt'];

$id_cat = $_POST['IdCat'];

$precio = $_POST['Precio'];

$query = "UPDATE articulos SET NombreArt = '$nombre', DescripcionArt = '$descripcion',
ImageArt = '$imageArt', IdCat = '$id_cat', Precio = '$precio' WHERE idArt = '$id_art' ";

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