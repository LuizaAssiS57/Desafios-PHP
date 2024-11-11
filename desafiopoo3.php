<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio3</title>
</head>
<body>
    <?php
        class Pessoa {
            protected $nome;
            protected $idade;

            public function __construct($nome, $idade) {
                $this->nome = $nome;
                $this->idade = $idade;
            }

            public function apresentar() {
                echo "Meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.<br>";
            }
        }

        class Estudante extends Pessoa {
            private $curso;

            public function __construct($nome, $idade, $curso) {
                parent::__construct($nome, $idade); 
                $this->curso = $curso; 
            }

            public function apresentar() {
                echo "Meu nome é " . $this->nome . ", tenho " . $this->idade . " anos e estudo " . $this->curso . ".<br>";
            }
        }

        $estudante = new Estudante("Luiza", 20, "Ciêcia de Dados");

        echo "<h2>Apresentação do Estudante:</h2>";
        $estudante->apresentar();
    ?>
</body>
</html>