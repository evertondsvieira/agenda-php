<?php
    session_start();

    if(empty($_POST) or (empty($_POST["username"]) or (empty($_POST["password"])))){
        print "<script>location.href='index.php';</script>";
    }

    include('config.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE username = '{$username}' AND password = '{$password}'";

    $res = $conn->query($sql) or die($conn->error);

    $row = $res->fetch_object();

    $qtd = $res-> num_rows;

    if($qtd > 0){
        $_SESSION['username'] = $username;
        print "<script>location.href='list-contact.php';</script>";
    } else {
        print "<script>alert('Usuário ou senha incorreta');</script>";
        print "<script>location.href='index.php';</script>";
    }