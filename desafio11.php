<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <?php 
             $numero = 9;  

             for ($i = 1; $i <= 10; $i++) {
                 $resultado = $numero * $i;  
                 echo "$numero x $i = $resultado <br>";  
             }
    ?>
</body>
</html>