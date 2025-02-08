<?php 
$server = "localhost";
$user= "root";
$pass = "";
$db_name = "login";


$conn = mysqli_connect($server, $user, $pass, $db_name);

if (!$conn) {
    die("Cennection Error". mysqli_connect_error());
}
?>