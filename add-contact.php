<h1>Novo contato</h1>

<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="create">
    <div>
        <label>Nome:</label>
        <input type="text" name="name" required>
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" required>
    </div>
    <div>
        <label>Telefone:</label>
        <input type="text" name="phone" required>
    </div>
    <div>
        <label>User id:</label>
        <input type="text" name="user_id" required>
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>