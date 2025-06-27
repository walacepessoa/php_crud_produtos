<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $stmt = $conn->prepare("INSERT INTO produtos (nome, preco) VALUES (?, ?)");
    if (!$stmt) {
        die("Erro na preparação da query: " . $conn->error);
    }
    $stmt->bind_param("sd", $nome, $preco);
    $stmt->execute();

    header("Location: index.php");
    exit;
}
?>

<h2>Adicionar Produto</h2>
<form method="POST" action="">
    Nome: <input type="text" name="nome" required><br>
    Preço: <input type="number" step="0.01" name="preco" required><br>
    <button type="submit">Salvar</button>
</form>
<a href="index.php">Voltar</a>