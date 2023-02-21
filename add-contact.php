<div class="centralize-form">
    <h1 class="add-name">Novo contato</h1>
    <form action="?page=save" method="POST">
        <input type="hidden" name="action" value="create">
        <div class="centralize-input">
            <label>Nome:</label>
            <input class="input" type="text" name="name" required>
        </div>
        <div class="centralize-input">
            <label>Email:</label>
            <input class="input" type="email" name="email" required>
        </div>
        <div class="centralize-input">
            <label>Telefone:</label>
            <input class="input" type="text" name="phone" required>
        </div>
        <div class="centralize-input">
            <label>User id:</label>
            <input class="input" type="text" name="user_id" required>
        </div>
        <div class="centralize-button">
            <button class="button-submit" type="submit">Enviar</button>
        </div>
    </form>
</div>