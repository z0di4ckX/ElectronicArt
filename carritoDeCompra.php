<?php
include('include/connect.php');

$fecha = $_POST['FechaCompra'];
$idcliente = $_POST['idCliente'];
$id = $_POST['idArt'];
$cantidad = $_POST['Cantidad'];


$query = "INSERT INTO venta (FechaCompra, idArt, idCliente, Cantidad)
        VALUES ('$fecha', '$id', '$idcliente', '$cantidad')";
$result = mysqli_query($conn, $query);

if($result > 0) {
    $last_id = mysqli_insert_id($conn);
    echo "New record successfully created. Last inserted ID is:" . $last_id;
}
else {
    echo "Error" . $query . "<br>" . mysqli_error($conn);
}

$sql2 = "SELECT * From articulos WHERE idArt = '".$id."'";

$result = mysqli_query($conn,$sql2);
While($row = mysqli_fetch_assoc($result))
{ 
//$id_art = $row["idArt"];
$nombreart = $row['NombreArt'];
$descr = $row['DescripcionArt'];
$imagen = $row['ImageArt'];
$precio = $row['Precio'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Electronic Art</title>
    <meta charset="UTF-8">
  <!-- bootstrap css -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
    <style>
    #thumb{
        width: 100px;
        height: auto;
    }
    </style>
</head>
<body>
    <nav>
    </nav>
    <div class="container">
    <div class="row">
    <h1>Electronic Art</h1>
    <div class="container">
    <div class="row">
    <h2>Carrito de Compra</h2>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <h2>Producto</h2>
    <div class="container">
    <div class="row">
    <h4><?php echo $nombreart;?></h4>
    </div>
    </div>
    <div class="container">
    <div class="row">
    <img src="<?php echo $imagen;?>" class="rounded" Style="width:400px; height:auto;">
    </div>
    </div>
    </div>
    </div>
        <form name="ventatotal" method="POST" action="ventatotal.php?Getid=<?php echo $last_id;?>" class="form-horizontal">
        <input type="hidden" name="idVenta" value="<?php echo $last_id;?>">
        <div class="form-group">  
        <label class="col-sm-2">Precio:</label><span class="input-group-text">$</span><output class="form-control" style="width:200px;"><?php echo $precio;?></output>            
        </div>
        <div class="form-group">  
        <label class="col-sm-2">Cantidad: </label> <output class="form-control"><?php echo $cantidad;?></output>          
        </div>
        <div class="form-group">  
        <label class="col-sm-2">SubTotal: </label><span class="input-group-text">$</span><input type="text" name="SubTotal" class="form-control Currency" style="width:200px;" value="<?php $subtotal = $precio * $cantidad; $subtotal = number_format($subtotal, 2, '.', ''); echo $subtotal;?>" readonly>           
        </div>
        <div class="form-group">  
        <label class="col-sm-2">Impuesto (IVU): </label><span class="input-group-text">$</span><input type="text" name="Impuesto" class="form-control Currency" style="width:200px;" value="<?php $impuesto = $subtotal * .115;$impuesto = number_format($impuesto, 2, '.', ''); echo $impuesto;?>" readonly>             
        </div>
        <div class="form-group">  
        <label class="col-sm-2">Total: </label><span class="input-group-text">$</span><input type="text" name="Total" class="form-control Currency" style="width:200px;" value="<?php $total = $subtotal + $impuesto; $total = number_format($total, 2, '.', ''); echo $total;?>" readonly>           
        </div>
        <div class="form-group">
        <input type="submit" name="submit" class="btn btn-success" value="Comprar"> 
        <input type="button" value="Regresar" onclick="history.back()" class="btn btn-primary">

        </div> 
        </form>
    <?php
    $conn->close();
    ?>
    </div>
    </div>
      <!-- bootstrap script -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- End -->
</body>
</html>
