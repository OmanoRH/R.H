<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Titulo -->
        <title>Cadastre-se</title>

        <!-- Linkagem CSS -->
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="codigo prof/style.css">

        <!-- Linkagem do MDI -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">

    </head>

    <body>

        <!-- Linkagem com o Banco -->
        <?php 
            require ("banco.php");    
        ?>

        <!-- Formulario de Cadastro Back -->
        <?php
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $email = $_POST['email'];
                $pass = md5($_POST['pass']);


                //Cadastro de Email
                if(empty($email)){
                    $erroEmail = "Por favor, informe um E-mail";
                }else{
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $erroEmail = "Por favor, insira seu E-mail corretamente";
                      }else{
                        $erroEmail = "Nenhum";
                      }
                }


                //Cadastro de Senha
                if(empty($pass)){
                    $erroPass = "Por favor, informe uma senha";
                }else{
                    if(strlen($pass) <8){
                        $erroPass = "Por favor, informe uma senha de pelo menos 8 caracteres";
                    }else{
                        $erroPass = "Nenhum";
                    }
                }

                //Validação de Usuario
                if ($erroEmail == "Nenhum" && $erroPass == "Nenhum") {
                    header("location: brigado.html");
                }
            }

            //Conexão com o Banco de Dados
            $sql = $pdo -> prepare("INSERT INTO usuario VALUES (null, ?, ?);");
            $sql -> execute(array($email, $pass));
        ?>

        <div class="wrapper fadeInDown">

            <div class="content-login">

            <h2 class="active"> Cadastro </h2>

                <form class="box-login" method="post" action="#">
                  <input type="email" id="email" class="campo" name="email" placeholder="E-mail">
                  <input type="text" id="password" class="campo" name="senha" placeholder="Senha">
                  <input type="submit" class="botao" value="Entrar">
                </form>

                <div class="box-lembrar-senha">  
                    <a class="link" href="login.php">Realizar Login</a>
                </div>

            </div>

        </div>

        <!-- Linkagem do JS -->
        <script src="JS/bootstrap.bundle.min.js"></script>


        <!-- Configuração do Balão -->
        <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        </script>
    </body>
</html>