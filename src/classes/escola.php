<?php
class Escola {
    public $nome;
    public $endereco;
    public $cidade;
    private $cnpj;

    public function __construct($nome, $endereco, $cidade, $cnpj) {
        if (empty($nome)) {
            throw new Exception("O campo Nome é obrigatório.");
        }
        if (empty($endereco)) {
            throw new Exception("O campo Endereço é obrigatório.");
        }
        if (empty($cidade)) {
            throw new Exception("O campo Cidade é obrigatório.");
        }
        if (!filter_var($cnpj, FILTER_VALIDATE_INT) || $cnpj < 0) {
            throw new Exception("O campo CNPJ deve ser um número inteiro positivo.");
        }

        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->cnpj = $cnpj;
    }
    public function getcnpj() {
        return $this->cnpj;
    }
    public function exibirDados() {
        echo "<p>Nome: <strong>$this->nome</strong><br>"; 
        echo "Endereço: <strong>$this->endereco</strong><br>";
        echo "Cidade: <strong>$this->cidade</strong></br>";
        echo "CNPJ: <strong>" . $this->getcnpj() . "</strong><br>"; 
        echo "<p>Escola cadastrada com sucesso!</p>";
    }
}
?>