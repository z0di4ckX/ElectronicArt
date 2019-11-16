<?php 

$servername = "localhost";
$username = "root"
$password = "";
$dbname = "electronicart";

// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);

if(!$connect) {
    echo $connect->connect_error();
}

?>