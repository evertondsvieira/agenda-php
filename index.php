<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Agenda</title>
</head>
<body>
    <header>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="?page=add">Adicionar novo contato</a></li>
            <li><a href="?page=list">Listar contato</a></li>
        </ul>
    </header>

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
                        default:
                            print "<h1>Bem-vindos!</h1>";
                    }
                ?>
            </div>
        </div>
    </div>


    <script src=""></script>
</body>
</html>