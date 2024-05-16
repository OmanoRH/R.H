<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php

        if(isset($_POST["e-mail"])){
            $email = $_POST["e-mail"];
            $senha = $_POST["senha"];
            if($email == "renatohgsoares@gmail.com" && $senha == 16240516){
                echo "$email $senha";
            }else{
                "<script>
                
                </script>";
            }
        }

        ?>
    </body>
</html>

