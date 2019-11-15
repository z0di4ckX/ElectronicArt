<?php 
$servername = "localhost";
$username = "root"
$password = "";
$dbname = "electronicart";

// Create connection
$connect = new mysqli($servername, $username, $password, $dbname);

// check connection
if($connect -> connect_error) {
    die("Connect faied: " . $connect -> connect_error);
}

$sql = "SELECT id_cliente, nombre, apellidos, telefono FROM cliente";
$result = $connect -> query($sql);

if($result -> number_row > 0) {
    // output data of each row
    while($row = $result -> fetch_assoc()) {
        echo "id: " . $row["id_cliente"] . " Name: " . $row["nombre"] . " Apellidos: " . $row["apellidos"] . " Telefono: " . $row["telefono"] . "<br>"; 
    }
}
else {
    echo "0 results";
}

$connect -> close();

?>