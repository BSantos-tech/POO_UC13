<?php
$host = '127.0.0.1'; // Endereço do servidor
$db = 'projeto_poo'; // Nome do banco de dados
$user = 'root'; // Usuário do banco
$pass = ''; // Senha do banco

// Tenta a conexão
try {
    $conn = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    // Configurações de erro para exceções
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida!";
} catch (PDOException $e) {
    echo "Erro de conexão: " . $e->getMessage();
}
?>