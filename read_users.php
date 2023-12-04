<?php
header('Content-Type: application/json');

// Configuração de acesso ao banco de dados
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'quehoraspassa');

// Conexão com o banco de dados
$con = mysqli_connect(HOST, USER, PASS, DB);

// Verificação da conexão
if (!$con) {
    die('Erro ao conectar: ' . mysqli_connect_error());
}

// Consulta para selecionar todos os usuários
$sql = "SELECT * FROM usuario";

// Executar a consulta
$result = mysqli_query($con, $sql);

if ($result) {
    $users = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }

    echo json_encode($users);
} else {
    echo json_encode(array("message" => "Erro ao ler usuários: " . mysqli_error($con)));
}
?>
