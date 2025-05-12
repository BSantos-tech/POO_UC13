<?php
require __DIR__ . "/../classes/login.php";

$usuario = $senha = "";
$loginCriado = false;

//Cadastrando
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST["usuario"]);
    $senha = trim($_POST["senha"]);

    try {
        $login = new Login($usuario, $senha);
        $loginCriado = true;
    } catch (Exception $e) {
        echo "<div class='alert alert-danger mt-3'>" . $e->getMessage() . "</div>";
    }
}

?>

<h2>Cadastro de login</h2>

<form method="post" class="row g-3 mb-4">
 
<div class="row justify-content-center align-items-center" style="min-height: 70vh;">
    <div class="col-md-5">
        <div class="card shadow-lg">
            <div class="card-body">
                <h3 class="text-center mb-4">Login</h3>
 
                <form method="post" action="index.php?page=login">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuário (e-mail):</label>
                        <input type="email" name="usuario" id="usuario" class="form-control" required>
                        value="<?= htmlspecialchars($usuario) ?>">
                    </div>
 
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha:</label>
                        <input type="password" name="senha" id="senha" class="form-control" required>
                        value="<?= htmlspecialchars($senha) ?>">
                    </div>
 
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
 
            </div>
        </div>
    </div>
</div>
 
</form>

<?php if ($loginCriado) {
    echo "<h3>Resultado:</h3>";
    $login->salvarDados();
}
?>

 