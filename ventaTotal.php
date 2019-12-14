<?php
 include('include/connect.php');
 $idventa = $_GET['Getid'];
 $subtotal = $_POST['SubTotal'];
 $impuesto = $_POST['Impuesto'];
 $total = $_POST['Total'];   
 
 $sql = "INSERT INTO procventa (idVenta, SubTotal, Impuesto, Total)
 VALUES ('$idventa', '$subtotal', '$impuesto', '$total')";
 ?>
 <html>
     <head>
         <meta charset="UTF-8">
         <title>Modificar usuario</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="js/bootstrap.min.js"></script>
 <script src="js/jquery-3.4.1.min.js"></script>
     </head>
 <body>
 <header>
 
 </header>
 <nav>
 </nav>
 <?php
 if ($conn->query($sql) === TRUE) {
     header("location: index.php");
 } else {
     echo "Error: " . $sql . "<br>" . $conn->error;
 }
 ?>
<?php mysqli_close($conn); ?>
</body>
</html> 