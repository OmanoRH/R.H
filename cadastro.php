<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
            <h1 style="text-align: center;">Vamos Realizar seu Cadastro em nosso Site!</h1>
                <div class="col">
                    <form method="POST">
                        <label for="e-mail">E-mail <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"></i></label>
                        <input  class="form-control <?php if(isset($erroEmail)){if($erroEmail !== "Nenhum"){echo "is-invalid";}}?> mt-2" type="text" name="email" placeholder="Insira seu E-mail" aria-label="default input example">
                        <div class="invalid-feedback">
                        <?php
                        if(isset($erroEmail)){
                            if($erroEmail !== "Nenhum"){
                                echo $erroEmail;
                            }
                        }
                        ?>
                        </div>
                        <label for="senha">Senha</label>
                        <input class="form-control mt-2" name="senha" placeholder="Crie sua Senha" type="password" aria-label="default input example">
                        <div class="invalid-feedback">
                        </div>
                        <label for="comfirmar Senha">Comfirme sua Senha</label>
                        <input class="form-control mt-2" name="senhac" placeholder="Repita a Senha que criou" type="password" aria-label="default input example">
                        <div class="invalid-feedback">
                        Please select a valid state.
                        </div>
                    </form>
                </div>
                <div class="col">
                    <form method="POST">
                        <label for="nome e sobrenome">Nome e Sobrenome</label>
                        <input class="form-control mt-2" name="nome" placeholder="Insira seu Nome e Sobrenome" type="text" aria-label="default input example">
                        <div class="invalid-feedback">
                        Please select a valid state.
                        </div>
                        <label for="numero">Número</label>
                        <input class="form-control mt-2" name="numero" placeholder="Insira seu Número telefone" type="text" aria-label="default input example">
                        <label for="idade">Idade</label>
                        <input type="number" class="form-control mt-2" name="idade" aria-label="default input example">
                        <div class="invalid-feedback">
                        Please select a valid state.
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <?php
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $senhac = $_POST["senhac"];
            $nome = $_POST["nome"];
            $numero = $_POST["numero"];
            $idade = $_POST["idade"];

        if(empty($email)){
            $erroEmail = "Por favor, informe um E-mail";
        }else{
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $erroEmail = "Por favor, insira seu E-mail corretamente";
              }else{
                $erroEmail = "Nenhum";
              }
        }
        }
        if(empty($nome)){
            $erroNome = "Por favor, Informe um Nome e Sobrenome";
        }else{
            if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
                $erroNome = "Por favor, informe um nome corretamente, sem números e sem símbolos";
              }else{
                $erroNome = "Nenhum";
              }
        }
        if(empty($senha)){
            $erroSenha = "Por favor, informe uma senha";
        }else{
            if(strlen($senha) <6 ){
                $erroSenha = "Por favor, informe uma senha de pelo menos 8 caracteres";
            }else{
                $erroSenha = "Nenhum";
            }
        }
        if(empty($senhac)){
            $erroSenhac = "Por favor, repetir a senha";
        }else{
            if($senhac != $senha){
                $erroSenhac = "As senhas precisam ser iguais";
            }else{
                $erroSenhac = "Nenhum";
            }
        }
        if(empty($idade)){
            $erroIdade = "Por favor, Informe sua Idade";
        }else{
            if(strlen($idade) <= 18){
                $erroIdade = "Por favor, Informe uma idade maior ou igual a 18 anos";
            }else{
                $erroIdade = "Nenhum";
            }
        }
        if($erroEmail == "Nenhum" && $erroSenha == "Nenhum" && $erroSenhac == "Nenhum" && $erroNome == "Nenhum" && $erroIdade == "Nenhum") {
            header("location: brigado.html");
        }
        ?>
        <script href="JS/bootstrap.bundle.min.js" ></script>
        <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        </script>
    </body>
</html>