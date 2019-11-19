<?php 

$servername = "localhost";
$username = "root"
$password = "";
$dbname = "electroart";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
    echo $conn -> connect_error();
}

?>