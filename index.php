<?php
require 'db.php';

$result = $conn->query("SELECT * FROM produtos ORDER BY id DESC");
?>

<h2>Lista de Produtos</h2>
<a href="inserir.php">Adicionar Produto</a>
<ul>
<?php while ($produto = $result->fetch_assoc()): ?>
    <li>
        <?= htmlspecialchars($produto['nome']) ?> - R$ <?= number_format($produto['preco'], 2, ',', '.') ?>
    </li>
<?php endwhile; ?>
</ul>
