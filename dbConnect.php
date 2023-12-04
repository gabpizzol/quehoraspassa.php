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
} else {
    echo 'Conexão bem-sucedida!';
}

?>