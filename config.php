<?php

$host = "localhost";
$user = "root";
$password = "12709Everton$";
$base = "agenda";

$conn = mysqli_connect($host, $user, $password, $base);
if(!$conn){
    die("Algo deu errado;");
}

?>
    