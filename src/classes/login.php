<?php
class Login
{
    public $num = 0;
    public $email;
    public $senha;

    private $emails = array();
    private $senhas = array();

    public function __construct($email, $senha)
    {
        if (empty($email)) {
            throw new Exception("O campo email é obrigatório.");
        }
        if (!filter_var($senha, FILTER_VALIDATE_INT) || $senha < 0) {
            throw new Exception("O campo senha deve ser um número inteiro positivo.");
        }

        $this->email = $email;
        $this->senha = $senha;
    }
    public function getsenha()
    {
        return $this->senha;
    }
    public function contaExiste()
    {
        foreach ($this->emails as $email) {
            if ($email == $this->email) {
                if ($this->senhas == $senhas[0]) {
                    return true;
                }
            }
            return false;
            
        }
    }
    public function salvarDados()
    {
        if (contaExiste()) {
            $this->senhas = array($this->getsenha());
            $this->emails = array($this->email);
            echo "<p>Login cadastrado com sucesso!</p>";
        } else { 
            echo "<p>Login invalido</p>";
        }
        

    }
}
