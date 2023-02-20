<h1>listar contatos</h1>
<?php 
    $sql= "SELECT * FROM contact";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table>";
            print "<tr>";
            print "<th>Nome</th>";
            print "<th>E-mail</th>";
            print "<th>Telefone</th>";
            print "<th>Ações</th>";
            print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->name."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->phone."</td>";
            print "<td>
                <button onClick=\"location.href='?page=update&id=".$row->id."';\">Editar</button>
                <button onClick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=save&action=destroy&id=".$row->id."';}else{false}\">Excluir</button>
            </td>";
            print "</tr/>";
        }
        print "</table>";
    } else {
        print "<p>Ainda está vazio!</p>";
    }
?>