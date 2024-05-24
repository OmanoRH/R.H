<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>


        <!-- Objeto "Carro" -->
        <?php

            class bolo{
                public $tipo;
                public $nome;
                public $ingredientes;
                public $preparo;

                public function __construct($tipo, $nome, $ingredientes, $preparo){
                    $this->tipo = $tipo;
                    $this->nome = $nome;
                    $this->ingredientes = $ingredientes;
                    $this->preparo = $preparo;

                }

                public function mensagem(){
                    echo "O $this->nome é do tipo de Bolo $this->tipo, seus ingredientes são: <br> $this->ingredientes <br> e o seu modo de preparo é: <br> $this->preparo";
                }

            }

            $bolocenoura = new bolo ("Caseiro", "Bolo de Cenoura", "Cenoura", "Assar" );

            echo $bolocenoura->tipo;
        ?>
    </body>

</html>