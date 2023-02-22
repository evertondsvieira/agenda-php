<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Lexend:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="style2.css">
    <title>YourAgenda</title>
</head>
<body>
    <header class="header">
        <p class="logo">YourAgenda<p>
        <ul class="header-ul">
            <li><a href='index.php'>Voltar</a></li>
        </ul>
    </header>

    <div class="centralize-form">
        <h1 class="add-register">Registre-se</h1>
        <form action="add-user.php" method="POST">
            <input type="hidden" name="actionUser" value="createUser">
            <div class="centralize-input">
                <label>Username:</label>
                <input class="input" type="text" name="username">
            </div>
            <div class="centralize-input">
                <label>Email:</label>
                <input class="input" type="email" name="email">
            </div>
            <div class="centralize-input">
                <label>Senha:</label>
                <input class="input" type="password" name="password">
            </div>
            <div class="centralize-input">
                <label>Digite a senha novamente:</label>
                <input class="input" type="password" name="passwordRepeat">
            </div>
            <span class="error" id="error-message"></span>
            <?php
            if(isset($_POST["submit"])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $passwordRepeat = $_POST['passwordRepeat'];
                $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                $email = $_POST['email'];
                $error = array();

                require_once "config.php";

                $sql = "SELECT * FROM user WHERE email = '$email'";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if($rowCount > 0){
                    $error_message = "<div style='color: red; font-size: 14px; font-family: Lexend;'>Email já registrado</div>";
                    array_push($error, $error_message);
                }
                
                $sql = "SELECT * FROM user WHERE username = '$username'";
                $result = mysqli_query($conn, $sql);
                $rowCount = mysqli_num_rows($result);
                if($rowCount > 0){
                    $error_message = "<div style='color: red; font-size: 14px; font-family: Lexend;'>Username já registrado</div>";
                    array_push($error, $error_message);
                }

                if(count($error)>0){
                    foreach($error as $error){
                        echo "<div>$error</div>";
                    } 
                } else {
                    $sql = "INSERT INTO user (username, password, email) VALUES ( ?, ?, ? )";
                    $stmt = mysqli_stmt_init($conn);
                    $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
                    if($prepareStmt){
                        mysqli_stmt_bind_param($stmt,"sss",$username,$passwordHash, $email);
                        mysqli_stmt_execute($stmt);
                        echo "<script>alert('Você foi cadastrado com sucesso');</script>";
                        echo "<script>location.href='index.php'</script>";
                    } else {
                        die("Algo deu errado");
                    }
                }
            }
            ?>
            <div class="centralize-button">
                <button class="button-submit" type="submit" name="submit">Enviar</button>
            </div>
        </form>
    </div>
    
    <script src="./validations/add-user-form-validation.js"></script>
</body>
</html>