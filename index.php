<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>
            pindamongoiaba
        </h1>
        <?php
        $nome = "A";
        echo "<h2>$nome</h2>";
        ?>

        <?php
        function sub($x, $y){
        $subitrair = $x - $y;
        
        return $subitrair;
        }

        echo (sub(15, 10));
        ?>
    </body>
</html>