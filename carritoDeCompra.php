<?php
    include('include/connect.php');

    $fecha = $_POST['FechaCompra'];
    $idcliente = $_POST['idCliente'];
    $idart = $_POST['idArt'];
    $cantidad = $_POST['Cantidad'];


    $query = "INSERT INTO venta (FechaCompra, idArt, idCliente, Cantidad
            VALUES ('$fecha', '$idart', '$idcliente', '$cantidad')";
    $result = mysqli_query($conn, $query);

    if($result > 0) {
        
    }
?>