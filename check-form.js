$(document).ready(function() {
  $("#form-test").on("submit", function() {

  var nome_input = $("input[name='name']");
  if (nome_input.val() == "" || nome_input.val() == null) {
    $("#erro-name").html("O nome é obrigatório");
  } else {
    $("#erro-name").html("");
  }

  var email_input = $("input[name='email']");
  if (email_input.val() == "" || email_input.val() == null) {
    $("#erro-email").html("O email é obrigatório");
  } else {
    $("#erro-email").html("");
  }

  var phone_input = $("input[name='phone']");
  if (phone_input.val() == "" || phone_input.val() == null) {
    $("#erro-phone").html("O telefone é obrigatório");
  } else {
    $("#erro-phone").html("");
  }

  var user_id_input = $("input[name='user_id']");
  if (user_id_input.val() == "" || user_id_input.val() == null) {
    $("#erro-id").html("O user id é obrigatório");
  } else {
    $("#erro-id").html("");
  }

  var username_input = $("input[name='username']");
  if (username_input.val() == "" || username_input.val() == null) {
    $("#erro-username").html("O username é obrigatório");
  } else {
    $("#erro-username").html("");
  }

  var password_input = $("input[name='password']");
  if (password_input.val() == "" || password_input.val() == null) {
    $("#erro-password").html("A senha é obrigatória");
  } else {
    $("#erro-password").html("");
  }

  // Se houver erros de validação, impede o envio do formulário
  if ($("#form-test .erro").text() !== "") {
    return false;
  }

  return true;
  });

  // Verifica campos de entrada quando um usuário digita
  $("input").on("input", function() {
    if ($(this).val() != "") {
      $(this).siblings(".erro").html("");
    }
  });
});
