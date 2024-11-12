<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
    <?php
        $produtos = array(
            "macarrão" => 2.99,
            "azeite" => 100.00,
            "molho de tomate" => 4.00  
        );
        
        foreach ($produtos as $produto => $preco) {
            echo "Produto: " . $produto . ", Preço: R$ " . number_format($preco, 2, ',', '.') . "<br>";
        }
    ?>
</body>
</html>