<?php
    $sql = "SELECT * FROM contact WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<div class="centralize-form">
    <h1 class="update-name">Editar contato</h1>
    <form action="?page=save" method="POST">
        <input type="hidden" name="action" value="update">
        <input type="hidden" name="id" value="<?php print $row->id; ?>">

        <div class="centralize-input">
            <label>Nome:</label>
            <input class="input" type="text" name="name" value="<?php print $row->name; ?>">
        </div>
        <div class="centralize-input">
            <label>Email:</label>
            <input class="input" type="email" name="email" value="<?php print $row->email; ?>">
        </div>
        <div class="centralize-input">
            <label>Telefone:</label>
            <input class="input" type="text" name="phone" value="<?php print $row->phone; ?>">
        </div>
        <div class="centralize-button">
            <button class="button-submit" type="submit">Enviar</button>
        </div>
    </form>
</div>