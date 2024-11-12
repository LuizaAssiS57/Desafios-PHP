<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polimorfismo com Métodos</title>
</head>
<body>
    <?php
        class Animal {
            public function fazerSom() {
                echo "O animal está fazendo som.<br>";
            }
        }

        class Cachorro extends Animal {
            public function fazerSom() {
                echo "O cachorro está latindo.<br>";
            }
        }

        class Gato extends Animal {
            public function fazerSom() {
                echo "O gato está miando.<br>";
            }
        }

        $cachorro = new Cachorro();
        echo "<h2>Som do Cachorro:</h2>";
        $cachorro->fazerSom();

        $gato = new Gato();
        echo "<h2>Som do Gato:</h2>";
        $gato->fazerSom();
    ?>
</body>
</html>