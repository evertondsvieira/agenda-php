<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Lexend:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="./style/style2.css">
    <title>YourAgenda</title>
</head>

<body>
    <header class="header">
        <p class="logo">YourAgenda<p>
        <ul class="header-ul">
            <li><a href='logout.php'>Sair</a></li>
        </ul>
    </header>

    <div>
        <?php 
            if (isset($_SESSION['username'])) {
                echo "<div class='centralize-welcome'>";
                echo "<h1 class='welcome'>Olá, " . $_SESSION['username'] . "</h1>";
                echo "<h1 class='description'>Seja muito bem-vindo ao YourAgenda</h1>";
                echo "<h1 class='description'>Espero que aproveite a experiência em nossa plataforma</h1>";
                echo "<h1 class='description'>Clique no botão abaixo para ser redirecionado ao painel de controle</h1>";
                echo "<button class='button-into' onclick=\"location.href = 'index.php';\">Vamos lá!</button>";
                echo "</div>";
            } else {
                print "<h1 class='welcome'>Você não está logado";
            }
        ?>
    </div>
</body>
</html>