<?php

include("connection.php");

$sql = "INSERT INTO produtos (nome, descricao, preco, estoque) VALUE (:nome, :descricao, :preco, :estoque)";

$stmt = $pdo->prepare($sql);

$produtoNome = htmlspecialchars($_POST["productName"]);
$produtoDescricao = htmlspecialchars($_POST["productDescription"]);
$produtoPreco = htmlspecialchars($_POST["productPrice"]);
$quantidadeEstoque = htmlspecialchars($_POST["productStock"]);

$stmt->bindParam(':nome', $produtoNome);
$stmt->bindParam(':descricao', $produtoDescricao);
$stmt->bindParam(':preco', $produtoPreco);
$stmt->bindParam(':estoque', $quantidadeEstoque);

$stmt->execute();

echo "<br>" . "Produto cadastrado com sucesso!";