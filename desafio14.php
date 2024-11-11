<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio14</title>
</head>
<body>
    <?php
           $palavras = array("Cachorro", "Cavalo", "Papagaio", "Sapo", "Peixe", "PHP"); 

           foreach ($palavras as $palavra) {
               if (strlen($palavra) > 5) {
                   echo $palavra . "<br>"; 
               }
           }
    ?>
</body>
</html>