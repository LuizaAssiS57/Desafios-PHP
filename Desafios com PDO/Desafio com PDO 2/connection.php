<?php
$dns = "mysql:host=localhost;dbname=teste"; 
$username = "root";
$password = "";

try {
    $pdo = new PDO($dns, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
    echo "Falha na conexão com o banco de dados! ". $e->getMessage();
}