<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criando uma Classe e Instanciando Objetos</title>
</head>
<body>
    <?php
        class Livro {
            public $titulo;
            public $autor;
            public $ano;

            public function __construct($titulo, $autor, $ano) {
                $this->titulo = $titulo;
                $this->autor = $autor;
                $this->ano = $ano;
            }

            public function exibirInformacoes() {
                echo "Título: " . $this->titulo . "<br>";
                echo "Autor: " . $this->autor . "<br>";
                echo "Ano: " . $this->ano . "<br><br>";
            }
        }

        $livro1 = new Livro("Atos Humanos", "Han Kang", 2021);
        $livro2 = new Livro("Orgulho e Preconceito", "Jane Austen", 1813);

        echo "<h2>Informações dos Livros:</h2>";
        $livro1->exibirInformacoes();
        $livro2->exibirInformacoes();
    ?>
</body>
</html>