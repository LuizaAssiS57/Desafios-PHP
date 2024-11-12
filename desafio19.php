<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="desafio19.php" method="POST">
        <label for="username">Nome de Usuário:</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="password">Senha:</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <input type="submit" value="Entrar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $erro = '';

        if (empty($username) || empty($password)) {
            $erro .= "Os campos nome de usuário e senha não podem estar vazios.<br>";
        }

        if (empty($erro)) {
            if ($username === "admin" && $password === "1234") {
                echo "Bem-vindo, $username!";
            } else {
                echo "<div style='color: red;'>Nome de usuário ou senha incorretos.</div>";
            }
        } else {
            echo "<div style='color: red;'>$erro</div>";
        }
    }
    ?>
</body>
</html>