<h1>Editar contato</h1>

<?php
    $sql = "SELECT * FROM contact WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=save" method="POST">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">

    <div>
        <label>Nome:</label>
        <input type="text" name="name" value="<?php print $row->name; ?>">
    </div>
    <div>
        <label>Email:</label>
        <input type="email" name="email" value="<?php print $row->email; ?>">
    </div>
    <div>
        <label>Telefone:</label>
        <input type="text" name="phone" value="<?php print $row->phone; ?>">
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>