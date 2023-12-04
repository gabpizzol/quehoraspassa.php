<?php

header('Content-Type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
     parse_str(file_get_contents("php://input"), $data);
     $id_usuario = $data["ID_USUARIO"];
     $nome = $data["NOME_USUARIO"];
     $email = $data["EMAIL_USUARIO"];
     $senha = $data["SENHA_USUARIO"];
 
     $sql = "UPDATE usuario SET NOME_USUARIO = '$nome', EMAIL_USUARIO = '$email', SENHA_USUARIO = '$senha' WHERE id_usuario = $id_usuario";
 
     if (mysqli_query($con, $sql)) {
         echo json_encode(array("message" => "Usuário atualizado com sucesso"));
     } else {
         echo json_encode(array("message" => "Erro ao atualizar usuário: " . mysqli_error($con)));
     }
 }
 

?>