<?php
class Aluno {
    public $nome;
    public $idade;
    public $curso;
    private $cpf;
    public function __construct($nome, $idade, $cpf, $curso) {
        if (empty($nome)) {
            throw new Exception("O campo Nome é obrigatório.");
        }
        if (!filter_var($idade, FILTER_VALIDATE_INT) || $idade < 0) {
            throw new Exception("A idade deve ser um número inteiro positivo.");
        }  
        if (empty($cpf)) {
            throw new Exception("O campo CPF é obrigatório.");
        }
        if (empty($curso)) {
            throw new Exception("O campo Curso é obrigatório.");
        }

        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->curso = $curso;
    }
    public function getCpf() {
        return $this->cpf;
    }

    public function exibirDados() {
        echo "<p>Nome: <strong>$this->nome</strong><br>"; 
        echo "Idade: <strong>$this->idade</strong> anos<br>"; 
        echo "CPF: <strong>" . $this->getCpf() . "</strong><br>";
        echo "Curso: <strong>$this->curso</strong></br>";
    }
}
?>