<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio5</title>
</head>
<body>
    <?php
        interface FormaGeometrica {
            public function calcularArea();
            public function calcularPerimetro();
        }

        class Quadrado implements FormaGeometrica {
            private $lado;

            public function __construct($lado) {
                $this->lado = $lado;
            }

            public function calcularArea() {
                return $this->lado * $this->lado;
            }
            public function calcularPerimetro() {
                return 4 * $this->lado;
            }
        }

        class Circulo implements FormaGeometrica {
            private $raio;

            public function __construct($raio) {
                $this->raio = $raio;
            }

            public function calcularArea() {
                return pi() * ($this->raio ** 2);
            }

            public function calcularPerimetro() {
                return 2 * pi() * $this->raio;
            }
        }

        $quadrado = new Quadrado(9);
        echo "<h2>Quadrado:</h2>";
        echo "Área: " . number_format($quadrado->calcularArea(), 2, ',', '.') . "<br>";
        echo "Perímetro: " . number_format($quadrado->calcularPerimetro(), 2, ',', '.') . "<br>";

        $circulo = new Circulo(5);
        echo "<h2>Círculo:</h2>";
        echo "Área: " . number_format($circulo->calcularArea(), 2, ',', '.') . "<br>";
        echo "Perímetro: " . number_format($circulo->calcularPerimetro(), 2, ',', '.') . "<br>";
    ?>
</body>
</html>