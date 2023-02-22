<?php

$host = "localhost";
$user = "root";
$password = "";
$base = "agenda";

$conn = mysqli_connect($host, $user, $password, $base);
if(!$conn){
    die("Algo deu errado;");
}

?>
    