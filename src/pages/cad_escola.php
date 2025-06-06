<?php

require __DIR__ . "/../classes/escola.php";



$nome = $cnpj = $endereço = $cidade = "";
$escolaCriada = false;

//Cadastrando
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $cnpj = trim($_POST["cnpj"]);
    $endereço = trim($_POST["endereço"]);
    $cidade = trim($_POST["cidade"]);
    try {
        $escola = new escola($nome, $cnpj, $endereço, $cidade);
        $escolaCriada = true;
    } catch (Exception $e) {
        echo "<div class='alert alert-danger mt-3'>" . $e->getMessage() . "</div>";
    }
}

?>

<h2>Cadastro de Escola</h2>

<form method="post" class="row g-3 mb-4">
    <div class="col-md-4">
        <label for="nome" class="form-label">Nome:</label>
        <input type="text" name="nome" id="nome" class="form-control"
            value="<?= htmlspecialchars($nome) ?>">
    </div>

    <div class="col-md-2">
        <label for="cnpj" class="form-label">CNPJ:</label>
        <input type="number" name="cnpj" id="cnpj" class="form-control"
            value="<?= htmlspecialchars($cnpj) ?>">
    </div>

    <div class="col-md-2">
        <label for="endereço" class="form-label">Endereço:</label>
        <input type="numbers" name="endereço" id="endereço" class="form-control"
            value="<?= htmlspecialchars($endereço) ?>">
    </div>

    <div class="col-md-4">
        <label for="cidade" class="form-label">Cidade:</label>
        <input type="text" name="cidade" id="cidade" class="form-control"
            value="<?= htmlspecialchars($cidade) ?>">
    </div>

    <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</form>

<?php if ($escolaCriada) {
    echo "<h3>Resultado:</h3>";
    $escola->exibirDados();
}

?>