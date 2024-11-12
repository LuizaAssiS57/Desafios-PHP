<?php
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id = (int)$_POST['id'];

    $stmt = $pdo->prepare('DELETE FROM products WHERE id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        echo "<p>Produto excluído com sucesso!</p>";
    } else {
        echo "<p>Erro ao excluir o produto.</p>";
    }

    echo '<a href="products.php">Voltar para lista de produtos</a>';
} else {
    echo "ID inválido ou método não suportado.";
}
