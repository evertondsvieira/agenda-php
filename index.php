<?php
    session_start();
    if (isset($_SESSION['username'])) {
        include("header.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Lexend:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>YourAgenda</title>
</head>
<body>
    <?php
        if ($_SERVER['REQUEST_URI'] == '/') {
            include("index.php");
            include("home.php");
        } else {
            if (!isset($_SESSION['username'])) {
                echo '
                    <div class="centralize-form">
                        <h1 class="login-name">Login</h1>
                        <form action="login.php" method="POST">
                            <div class="centralize-input">
                                <label>Username</label>
                                <input class="input" type="text" name="username">
                            </div>
                            <div class="centralize-input">
                                <label>Senha</label>
                                <input class="input" type="password" name="password"> 
                            </div>
                            <div class="centralize-button">
                                <button class="button-submit" type="submit">Enviar</button>
                            </div>
                        </form>
                    </div>
                ';
            }
        }
    ?>

    <div>
        <div>
            <div>
                <?php
                    include("config.php");
                    switch(@$_REQUEST["page"]){
                        case "add":
                            include("add-contact.php");
                        break;
                        case "list":
                            include("list-contact.php");
                        break;
                        case "update":
                            include("update-contact.php");
                        break;
                        case "save":
                            include("save-contact.php");
                        break;
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
