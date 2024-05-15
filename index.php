<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php

        $DesenhosDaCartoon = array("Ben 10", "Hora de Aventura", "Apenas um Show", "historias macabras para crianças malcriadas", "Irmão do Jorel", "O Incrivel Mundo de Gumbool");
        $a = ["Janeiro", "fevereiro", "março", "abril", "maio", "junho", "julho"];
        $DesenhosDaCartoon[3] = "As trapalhadas de Flap Jack";
        foreach($DesenhosDaCartoon as $a){
            echo ("$a <br>");
        
        }
        for ($b = 80; $b >= 20; $b-= 2 ){
            $divi = $b/2;
            echo ("$divi <br>");
        };
        ?>

        <br>
        <br>
        
        <h3>Exercicio 1</h3>

        <?php

        $x = 2;
        $y = 4;
        $soma = $x + $y;
        $resultado = $soma * $x;

        echo ($resultado)

        ?>

        <br><br>

        <h3>Exercicio 2</h3>

        <?php

        $val1 = 7;
        $val2 = 9;
        $val3 = 4;
        $soma = $val1 + $val2 + $val3;
        $resultado = $soma / 3;

        echo ($resultado)

        ?>

        <br> <br>

        <h3>Exercicio 3</h3>

        <?php

        $valor = 100;
        $resultado = $valor * 0.15; 

        echo ($resultado);

        ?>

        <br><br>

        <h3>Exercicio 4</h3>

        <?php

        $valor = 100;
        $resultado5 = $valor * 0.05; 
        $resultado50 = $valor * 0.50;

        echo ("$resultado5 $resultado50");

        ?>

        <br><br>

        <h3>Exercicio 5</h3>

        <?php
        $x = 1;
        if($x >0){
            echo ("Valor Positivo");
        }
        elseif($x <0){
            echo ("Valor Negativo");
        }
        else{
            echo ("Igual a Zero");
        }

        ?>

        <br><br>

        <h3>Exercicio 6</h3>

        <?php

        for($val = 0; $val <= 10; $val++){
            $entrada = 4;
            $multi = $val * $entrada;
            echo "4 x $val = $multi <br>";
        }

        ?>

        <br><br>

        <h3>Exercicio 7</h3>

        <?php

        
        
        ?>

        <br><br>
        
        <h3>Exercicio 8</h3>

        <?php

        
        
        ?>

        <br><br>

        <h3>Exercicio 9</h3>

        <?php

        
        
        ?>
        
        <br><br>

        <h3>Exercicio 10</h3>

        <?php

        
        
        ?>

</html>