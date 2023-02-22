<div class="centralize-form">
    <h1 class="add-name">Novo contato</h1>
    <form action="?page=save" method="POST" id="form-test">
        <input type="hidden" name="action" value="create">
        <div class="centralize-input">
            <label>Nome:</label>
            <input class="input" type="text" name="name">
            <p id="erro-name" style="color: red"></p>
        </div>
        <div class="centralize-input">
            <label>Email:</label>
            <input class="input" type="email" name="email">
            <p id="erro-email" style="color: red"></p>
        </div>
        <div class="centralize-input">
            <label>Telefone:</label>
            <input class="input" type="text" name="phone">
            <p id="erro-phone" style="color: red"></p>
        </div>
        <input type="hidden" name="user_id" value="<?php echo $_SESSION['id']; ?>">
        <div class="centralize-button">
            <button class="button-submit" type="submit" name="submit">Enviar</button>
        </div>
    </form>
</div>