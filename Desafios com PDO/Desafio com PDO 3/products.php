<?php
include "connection.php";

$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$perPage = 10; 
$offset = ($page - 1) * $perPage;

$stmt = $pdo->prepare('SELECT * FROM products ORDER BY id LIMIT :perPage OFFSET :offset');
$stmt->bindValue(':perPage', $perPage, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();
$products = $stmt->fetchAll();

$totalStmt = $pdo->query('SELECT COUNT(*) FROM products');
$totalRows = $totalStmt->fetchColumn();
$totalPages = ceil($totalRows / $perPage);

echo "<table border='1'><tr><th>ID</th><th>Nome</th><th>Preço</th></tr>";
foreach ($products as $product) {
    echo "<tr><td>" . htmlspecialchars($product['id']) . "</td><td>" . htmlspecialchars($product['name']) . "</td><td>$" . htmlspecialchars($product['price']) . "</td></tr>";
}
echo "</table>";

echo "<p style='text-align: center;'>";

if ($page > 1) {
    echo '<a href="?page=' . ($page - 1) . '">Página Anterior</a> ';
}

for ($i = 1; $i <= $totalPages; $i++) {
    if ($i == $page) {
        echo " <strong>$i</strong> "; 
    } else {
        echo '<a href="?page=' . $i . '">' . $i . '</a> ';
    }
}

if ($page < $totalPages) {
    echo '<a href="?page=' . ($page + 1) . '">Próxima Página</a>';
}

echo "</p>";
