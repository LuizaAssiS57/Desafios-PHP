<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pontuação do Jogo</title>
</head>
<body>
    <?php
      $pontos = 100;
      $vitorias = 2;
      $derrotas = 5;
      
      $pontos += $vitorias * 20;
      $pontos -= $derrotas * 15;

      echo "Pontuação inicial: 100<br>";
      echo "Número de vitórias: " . $vitorias . "<br>";
      echo "Número de derrotas: " . $derrotas . "<br>";
      echo "Pontução final: " . $pontos;

    ?>
</body>
</html>