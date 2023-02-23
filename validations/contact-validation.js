$(document).ready(function() {
    $('form').submit(function(event) {
        let name = $('input[name="name"]').val();
        let email = $('input[name="email"]').val();
        let phone = $('input[name="phone"]').val();
        let errorMessage = $('#erro-geral');

        if (name.trim() === "" || email.trim() === "" || phone.trim() === "") {
        errorMessage.text('Por favor, preencha todos os campos.');
        errorMessage.css({"color": "red", "font-size": "14px", "font-family": "Lexend"});
        event.preventDefault();
        } else if (!isValidEmail(email)) {
        errorMessage.text('Por favor, insira um endereço de e-mail válido.');
        errorMessage.css({"color": "red", "font-size": "14px", "font-family": "Lexend"});
        event.preventDefault();
        } else {
        errorMessage.text('');
        errorMessage.removeClass('error');
        }
    });

    function isValidEmail(email) {
        let emailRegex = /^\S+@\S+\.\S+$/;
        return emailRegex.test(email);
    }
});