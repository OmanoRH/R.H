<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $banco = "restaurante";
        ?>

        <?php $pdo = new PDO("mysql:host=$servidor;dbname=$banco", "$usuario", "$senha");?>
        
    </body>
</html>