<?php
    $sql = "SELECT * FROM contact WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourAgenda</title>
</head>
<body>
    <div class="centralize-form">
        <h1 class="update-name">Editar contato</h1>
        <form action="?page=save" method="POST">
            <input type="hidden" name="action" value="update">
            <input type="hidden" name="id" value="<?php print $row->id; ?>">

            <div class="centralize-input">
                <label>Nome:</label>
                <input class="input" type="text" name="name" value="<?php print $row->name; ?>">
            </div>
            <div class="centralize-input">
                <label>Email:</label>
                <input class="input" type="email" name="email" value="<?php print $row->email; ?>">
            </div>
            <div class="centralize-input">
                <label>Telefone:</label>
                <input class="input" type="text" name="phone" value="<?php print $row->phone; ?>">
            </div>

            <span id="erro-geral" style="color: red; font-size: 14px; font-family: Lexend;"></span>

            <div class="centralize-button">
                <button class="button-submit" type="submit">Enviar</button>
            </div>
        </form>
    </div>
<script src="./validations/contact-validation.js"></script> 
</body>
</html>
