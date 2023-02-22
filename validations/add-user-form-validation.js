$(document).ready(function() {
    $('form').submit(function(event) {
        let username = $('input[name="username"]').val();
        let password = $('input[name="password"]').val();
        let email = $('input[name="email"]').val();
        let passwordRepeat = $('input[name="passwordRepeat"]').val();
        let errorMessage = $('#error-message');

        if (username.trim() === "" || password.trim() === "" || email.trim() === "" || passwordRepeat.trim() === "") {
            errorMessage.text('Por favor, preencha todos os campos.');
            errorMessage.css({"color": "red", "font-size": "14px", "font-family": "Lexend"});
            event.preventDefault();
        } else if (!isValidEmail(email)) {
            errorMessage.text('Por favor, insira um endereço de e-mail válido.');
            errorMessage.css({"color": "red", "font-size": "14px", "font-family": "Lexend"});
            event.preventDefault();
        } else if (password.length < 4) {
            errorMessage.text('A senha deve ter pelo menos 4 caracteres.');
            errorMessage.css({"color": "red", "font-size": "14px", "font-family": "Lexend"});
            event.preventDefault();
        } else if (password !== passwordRepeat) {
            errorMessage.text('As senhas não correspondem.');
            errorMessage.css({"color": "red", "font-size": "14px", "font-family": "Lexend"});
            event.preventDefault();
        } else {
            errorMessage.text('');
            errorMessage.removeClass('error');
        }
    });

    $('#register-button').click(function() {
        $('#error-message').text('');
        $('#error-message').removeClass('error');
    });
});

function isValidEmail(email) {
    let emailRegex = /^\S+@\S+\.\S+$/;
    return emailRegex.test(email);
}