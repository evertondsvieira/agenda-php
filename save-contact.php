<?php
    switch($_REQUEST["action"]){
        case "create":
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $user_id = $_POST['user_id'];

            $sql = "INSERT INTO contact (
                name, email, phone, user_id)
                VALUES (
                    '{$name}', 
                    '{$email}', 
                    '{$phone}', 
                    '{$user_id}'
                )";
            
            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Cadastrado com sucesso');</script>";
                print "<script>location.href='?page=list'</script>";
            } else {
                print "<script>alert('Não foi possível cadastrar');</script>";
                print "<script>location.href='?page=list'</script>";
            }
            break;
        
        case "update":
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $user_id = $_POST['user_id'];

            $sql = "UPDATE contact SET 
                    name='{$name}', 
                    email='{$email}', 
                    phone='{$phone}'
                WHERE 
                    id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Atualizado com sucesso');</script>";
                print "<script>location.href='?page=list'</script>";
            } else {
                print "<script>alert('Não foi possível atualizar');</script>";
                print "<script>location.href='?page=list'</script>";
            }

            break;
        case "destroy":
            $sql = "DELETE FROM contact WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                print "<script>alert('Excluido com sucesso');</script>";
                print "<script>location.href='?page=list'</script>";
            } else {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=list'</script>";
            }
            break;
    }