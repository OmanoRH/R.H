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
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, consequatur nihil molestiae accusamus, cupiditate exercitationem ex in et nostrum ea quo non esse laudantium officiis architecto. Quaerat voluptatum corporis recusandae?</p>
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