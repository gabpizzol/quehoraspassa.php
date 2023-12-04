<?php
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $data = json_decode(file_get_contents("php://input"), true);

  $nome = $data["NOME_USUARIO"];
  $email = $data["EMAIL_USUARIO"];
  $senha = $data["SENHA_USUARIO"];

  $sql = "INSERT INTO usuario (NOME_USUARIO, EMAIL_USUARIO, SENHA_USUARIO) VALUES ('$nome', '$email', '$senha')";

  if (mysqli_query($con, $sql)) {
      echo json_encode(array("message" => "Usuário criado com sucesso"));
  } else {
      echo json_encode(array("message" => "Erro ao criar usuário: " . mysqli_error($con)));
  }
}
?>