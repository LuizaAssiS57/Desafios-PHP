<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento com Atributos Privados</title>
</head>
<body>
    <?php
        class ContaBancaria {
            private $saldo;
            public function __construct() {
                $this->saldo = 0; 
            }

            public function depositar($valor) {
                if ($valor > 0) {
                    $this->saldo += $valor; 
                } else {
                    echo "Valor de depósito deve ser positivo.<br>";
                }
            }

            public function getSaldo() {
                return $this->saldo; 
            }
        }

        $conta = new ContaBancaria();
        $conta->depositar(500);
        echo "<h2>Saldo da Conta:</h2>";
        echo "Saldo: R$ " . number_format($conta->getSaldo(), 2, ',', '.');
    ?>
</body>
</html>