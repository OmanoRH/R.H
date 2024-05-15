<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $senha = $_POST['senha'];
        echo "$nome <br> $idade <br> $senha";
    }
    ?>
    </body>
</html>

