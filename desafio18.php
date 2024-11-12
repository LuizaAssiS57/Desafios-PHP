<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Contato Simples</title>
</head>
<body>
    <h1>Contato</h1>
    <form action="desafio18.php" method="POST">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>
        
        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $erro = '';

        if (empty($nome)) {
            $erro .= "O campo 'nome' não pode estar vazio.<br>";
        }

        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erro .= "Por favor, insira um e-mail válido.<br>";
        }

        if (empty($erro)) {
            echo "Olá $nome, agradecemos pelo seu contato. Responderemos para $email em breve.";
        } else {
            echo "<div style='color: red;'>$erro</div>";
        }
    }
    ?>
</body>
</html>