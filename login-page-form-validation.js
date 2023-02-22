$(document).ready(function() {
    $('#register-button').click(function() {
        window.location.href = 'add-user.php';
    });
});

$(document).ready(function() {
    $('form').submit(function(event) {
        var username = $('input[name="username"]').val();
        var password = $('input[name="password"]').val();
        var errorMessage = $('#error-message');

        if (username.trim() === "" || password.trim() === "") {
        errorMessage.text('Por favor, preencha todos os campos.');
        errorMessage.css({"color": "red", "font-size": "14px", "font-family": "Lexend"});
        event.preventDefault();
        } else {
        errorMessage.text('');
        }
    });

    $('#login-button').click(function() {
        $('#error-message').text('');
    });

    $('#register-button').click(function() {
        $('#error-message').text('');
    });
});