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
        <h1 class="add-name">Novo contato</h1>
        <form action="?page=save" method="POST">
            <input type="hidden" name="action" value="create">
            <div class="centralize-input">
                <label>Nome:</label>
                <input class="input" type="text" name="name">
            </div>
            <div class="centralize-input">
                <label>Email:</label>
                <input class="input" type="email" name="email">
            </div>
            <div class="centralize-input">
                <label>Telefone:</label>
                <input class="input" type="text" name="phone">
            </div>
            <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
            
            <span id="erro-geral" style="color: red; font-size: 14px; font-family: Lexend;"></span>
            
            <div class="centralize-button">
                <button class="button-submit" type="submit" name="submit">Enviar</button>
            </div>
        </form>
    </div>

    <script src="./validations/contact-validation.js"></script>
</body>
</html>