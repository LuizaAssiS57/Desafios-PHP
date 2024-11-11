<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio05</title>
</head>
<body>
    <?php

        $preco = 50;
        $desconto = 10;

   
        $valordescontado = $preco * ($desconto / 100);
        $valorfinal = $preco - $valordescontado;

        echo "O valor original era: R$ " . $preco . "<br>";
        echo "O desconto era: " . $desconto . "%<br>";
        echo "O valor com desconto é: R$ " . $valorfinal . "<br>";
    ?>
        
    ?>
</body>
</html>