<h1 class="list-name">Lista de contatos</h1>
<?php 
    $sql= "SELECT * FROM contact";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<div class='centralize-table'>";
            print "<table class='table'>";
                print "<tr class='tr-head'>";
                print "<th>Nome</th>";
                print "<th>E-mail</th>";
                print "<th>Telefone</th>";
                print "<th>Ações</th>";
                print "</tr>";
            while($row = $res->fetch_object()){
                print "<tr class='tr-input'>";
                print "<td>".$row->name."</td>";
                print "<td>".$row->email."</td>";
                print "<td>".$row->phone."</td>";
                print "<td class='centralize-td-button'>
                    <button class='update-button' onClick=\"location.href='?page=update&id=".$row->id."';\">Editar</button>
                    <button class='delete-button' onClick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save&action=destroy&id=".$row->id."';}else{false}\">Excluir</button>
                </td>";
                print "</tr>";
            }
            print "</table>";
        print "</div>";
    } else {
        print "<p>Ainda está vazio!</p>";
    }
?>