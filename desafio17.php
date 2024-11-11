<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio17</title>
</head>
<body>
    <?php
        $notas = array(
            "Fernanda Moraes Mezando Soares" => 8.9,
            "Karina Medrada Timbalada Zeta" => 10,
            "Pedro Figueredo Santino Montes" => 9.7  
        );

        
        $somaNotas = 0;
        $totalAlunos = count($notas);

        foreach ($notas as $aluno => $nota) {
            echo "Aluno: " . $aluno . ", Nota: " . number_format($nota, 1, ',', '.') . "<br>";
            $somaNotas += $nota; 
        }

        $media = $somaNotas / $totalAlunos;

        echo "Média da turma: " . number_format($media, 1, ',', '.');
    ?>
</body>
</html>