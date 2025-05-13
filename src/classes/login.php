<?php


class Login {
    private $usuario;
    private $senha;
    private $pdo;

    public function __construct($usuario, $senha) {
        $this->usuario = $usuario;
        $this->senha = $senha;

        // Conecta ao banco de dados
        $this->pdo = new PDO("mysql:host=localhost;dbname=sistema_login", "seu_usuario", "sua_senha");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function salvarDados() {
        try {
            $stmt = $this->pdo->prepare("INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha)");
            $stmt->bindParam(':usuario', $this->usuario);
            $stmt->bindParam(':senha', $this->senha);
            $stmt->execute();
            echo "<div class='alert alert-success mt-3'>Usuário cadastrado com sucesso!</div>";
        } catch (PDOException $e) {
            echo "<div class='alert alert-danger mt-3'>Erro ao cadastrar: " . $e->getMessage() . "</div>";
        }
    }
} 
?>
