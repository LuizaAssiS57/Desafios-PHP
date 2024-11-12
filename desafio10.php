<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Somando os Números Pares</title>
</head>
<body>
    <?php
        $soma = 0; 

        for ($i = 0; $i <= 100; $i++) {
            if ($i % 2 == 0) {
                $soma += $i;
            }
        }

        echo "A soma de todos os números pares de 1 a 100 é: " . $soma;
    ?>
</body>
</html>