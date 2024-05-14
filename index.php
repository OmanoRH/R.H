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
        
        <?php

        $x = 2;
        $y = 4;
        $soma = $x + $y;
        $resultado = $soma * $x;

        echo ($resultado)

        ?>

        <br><br>

        <?php

        $val1 = 7;
        $val2 = 9;
        $val3 = 4;
        $soma = $val1 + $val2 + $val3;
        $resultado = $soma / 3;

        echo ($resultado)

        ?>

        <br> <br>

        <?php

        $valor = 100;
        $resultado = $valor * 0.15; 

        echo ($resultado);

        ?>

        <br><br>

        <?php

        $valor = 100;
        $resultado5 = $valor * 0.05; 
        $resultado50 = $valor * 0.50;

        echo ("$resultado5 $resultado50");

        ?>

        <br><br>

        <?php
        $x = 0;
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

        <?php

        for($i = 0; $i >= 10; $i++){
            $multi = 4 * $i;
            echo $multi;
        }

        ?>

        <?php
        ?>

</html>