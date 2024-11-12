<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Simples</title>
</head>
<body>
    <?php
        $usuarioCorreto = "usuario135";
        $senhaCorreta = "senha678";
        
        $usuarioInput = "usuario123";
        $senhaInput = "senha123";

        if ($usuarioInput === $usuarioCorreto && $senhaInput === $senhaInput) {
            echo "Login bem-sucedido!";
        } else {
            echo "Login falhou. Nome de usuário ou senha incorretos.";
        }
    ?>
</body>
</html>