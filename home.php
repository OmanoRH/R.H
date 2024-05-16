<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="CSS/style.css">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col"></div>
                <div class="col">
                    <h1 class="login">Faça seu Login!</h1>
                    <form method="POST">
                        <label class="e-mail mt-3">E-mail:</label>
                        <input id="e-mail" class="form-control mt-2" type="text" name="e-mail" placeholder="Insira seu E-mail aqui" aria-label="default input example">
                        <label class="senha mt-3">Crie sua Senha:</label>
                        <input id="senha" class="form-control mt-2" type="password" name="senha" placeholder="Insira sua Senha aqui" aria-label="default input example">
                        <button type="submit" class="btn btn-outline-primary mt-3 mb-3">Realizar Login</button>
                        <button type="button" class="btn btn-outline-primary mt-3 mb-3">Realizar Cadastro</button>
                    </form>
                    <?php

                    if(isset($_POST["e-mail"])){
                        $email = $_POST["e-mail"];
                        $senha = $_POST["senha"];
                        if($email == "renatohgsoares@gmail.com" && $senha == 16240516){
                            echo '<p style="color: green">Login realizado com sucesso</p>';
                        }else{
                            echo  '<p style="color: red";>E-mail ou Senha incorretos</p>';
                            //echo '<script> alert("abobora"); </script>';
                        }
                    }
                
                    ?>
                </div>
                <div class="col"></div>
            </div>
        </div>
    <script href="JS/bootstrap.bundle.min.js"></script>
    <script href="JS/script.js"></script>
    </body>
</html>