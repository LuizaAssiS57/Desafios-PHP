<?php
include("connection.php"); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id_usuarios = htmlspecialchars($_POST["userId"]);
    $nome = htmlspecialchars($_POST["userName"]);
    $email = htmlspecialchars($_POST["userEmail"]);
    $senha = password_hash(htmlspecialchars($_POST["userPassword"]), PASSWORD_DEFAULT); 

    $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha WHERE id_usuarios = :id_usuarios";
    
    try {
        $stmt = $pdo->prepare($sql);
        
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);
        $stmt->bindParam(':id_usuarios', $id_usuarios);

        $stmt->execute();

        echo "<br>Atualização de perfil feita com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao atualizar perfil: " . $e->getMessage();
    }
}
