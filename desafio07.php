<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio07</title>
</head>
<body>
    <?php
       $nota1 = 5;
       $nota2 = 9;
       $nota3 = 3.5;
       
       $media = ($nota1 + $nota2 + $nota3) / 3;

       if($media >= 7) {
            echo"Aprovado";
       }elseif($media < 7) {
            echo "Reprovado";
       }else{
            echo "Nota invalida";
       }
    ?>
</body>
</html>