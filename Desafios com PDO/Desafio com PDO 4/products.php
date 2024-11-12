<?php
include "connection.php";

$stmt = $pdo->query('SELECT * FROM products ORDER BY id');
$products = $stmt->fetchAll();

echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Preço</th><th>Ações</th></tr>";
foreach ($products as $product) {
    echo "<tr>
            <td>" . htmlspecialchars($product['id']) . "</td>
            <td>" . htmlspecialchars($product['name']) . "</td>
            <td>$" . htmlspecialchars($product['price']) . "</td>
            <td>
                <a href='confirm_delete.php?id=" . htmlspecialchars($product['id']) . "'>Excluir</a>
            </td>
          </tr>";
}
echo "</table>";
