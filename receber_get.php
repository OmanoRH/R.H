<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php

    if(isset($_GET["rua"])){
        $rua = $_GET["rua"];
        $numero = $_GET["numero"];
        $bairro = $_GET["bairro"];
        echo " Rua: $rua <br> Nr: $numero <br> Bairro: $bairro";
    }
    ?>
    </body>
</html>