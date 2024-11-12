<?php
include "connection.php";

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];

    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $product = $stmt->fetch();

    if ($product) {
        echo "<h2>Tem certeza que deseja excluir o produto: " . htmlspecialchars($product['name']) . "?</h2>";
        echo "<form method='POST' action='delete_product.php'>
                <input type='hidden' name='id' value='" . htmlspecialchars($product['id']) . "'>
                <button type='submit'>Confirmar Exclusão</button>
              </form>
              <a href='products.php'>Cancelar</a>";
    } else {
        echo "Produto não encontrado.";
    }
} else {
    echo "ID inválido.";
}
