<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio13</title>
</head>
<body>
    <?php 
       $produtos = array(15, 25, 80, 10, 90);
       $total = 0; 
       foreach ($produtos as $p) {
           $total += $p;
       }

       echo "O total da compra é: R$ " . $total;
    ?>
</body>
</html>