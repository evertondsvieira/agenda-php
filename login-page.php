<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YourAgenda</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="centralize-form-login">
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
        <span class="error" id="error-message"></span>
        <div class="centralize-button">
            <button id='login-button' class="button-submit" type="submit" name="submit">Enviar</button>
        </div>
        <div class="centralize-into-register">
            <p>Ainda não tem cadastro?</p>
            <p class='button-into-register' id="register-button">Vamos lá!</p>
        </div>  
    </form>
<script src="login-page-form-validation.js"></script>
</div>
</body>
</html>