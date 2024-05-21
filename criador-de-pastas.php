<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- Linkagem do CSS -->
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
    </head>

    <body>

        <!-- Criador de Pastas -->
        <?php

            $pasta0 = "pastaNova/";
            $pasta1 = "novaPasta/";

            $pasta2 = $pasta0.$pasta1;

            
            if (!is_dir($pasta1,)) {
                mkdir($pasta1, 755, true);
            }else{
                rmdir("$pasta1");
            }


        ?>


        <!-- Linkagem do JS -->
        <script src="JS/bootstrap.bundle.min.js"></script>
    </body>

</html>