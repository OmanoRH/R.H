<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <!-- Linkagem CSS -->
    <link rel="stylesheet" href="CSS/bootstrap.min.css">

    <!-- Linkagem do MDI -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
</head>

<body>
    <?php
        //Linkagem com a config do Banco de Dados
        require ("banco.php");

        $sql = $pdo->prepare("SELECT * FROM usuario");
        $sql -> execute();
        $dados = $sql-> fetchAll();

        //Formulario Back-End

        $dadinhos = $sql;

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $senhac = $_POST["senhac"];
            $nome = $_POST["nome"];
            $numero = $_POST["numero"];
            $idade = $_POST["idade"];
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
        //Cadastro de Nome
        if(empty($nome)){
            $erroNome = "Por favor, Informe um Nome e Sobrenome";
        }else{
            if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
                $erroNome = "Por favor, informe um nome corretamente, sem números e sem símbolos";
              }else{
                $erroNome = "Nenhum";
              }
        }
        //Cadastro de Senha
        if(empty($senha)){
            $erroSenha = "Por favor, informe uma senha";
        }else{
            if(strlen($senha) <8){
                $erroSenha = "Por favor, informe uma senha de pelo menos 8 caracteres";
            }else{
                $erroSenha = "Nenhum";
            }
        }
        //Comfirmação de senha
        if(empty($senhac)){
            $erroSenhac = "Por favor, repetir a senha";
        }else{
            if($senhac != $senha){
                $erroSenhac = "As senhas precisam ser iguais";
            }else{
                $erroSenhac = "Nenhum";
            }
        }
        //Cadastro de Idade
        if(empty($idade)){
            $erroIdade = "Por favor, Informe sua Idade";
        }else{
            if($idade < 18){
                $erroIdade = "Por favor, Informe uma idade maior ou igual a 18 anos";
            }else{
                $erroIdade = "Nenhum";
            }
        }
        //Validação do Usuario
        if($erroEmail == "Nenhum" && $erroNome == "Nenhum" && $erroSenha == "Nenhum" && $erroSenhac == "Nenhum" && $erroIdade == "Nenhum"){
            header("location: brigado.html");
        }
        }
        //Conexão com o Banco de Dados
        $sql = $pdo -> prepare("INSERT INTO usuario VALUES (null, ?, ?, ?, ?, ?, ?);");
        $sql -> execute(array($email, $senha, $senhac, $nome, $numero, $idade));

    ?>


    <!-- Interface -->
    <div class="container">
        <div class="row">
            <h1 style="text-align: center;">Vamos Realizar seu Cadastro em nosso Site!</h1>
            <div class="col">


            <!-- Formulario de Cadastro Front-->
                <form method="POST" novalidate>


                <!-- Campo de Texto do Email -->
                    <label for="email" class="mt-3">E-mail <i class="mdi mdi-information-outline"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"></i>
                    </label>
                    <input
                        class="form-control <?php if(isset($erroEmail)){if($erroEmail != "Nenhum"){echo "is-invalid";}}?> mt-2"
                        type="text" name="email" placeholder="Insira seu E-mail" aria-label="default input example">
                    <div class="invalid-feedback">
                        <?php
                        if(isset($erroEmail)){
                            if($erroEmail != "Nenhum"){
                                echo $erroEmail;
                            }
                        }
                        ?>
                    </div>


                    <!-- Campo de Texto da Senha -->
                    <label for="senha" class="mt-3">Senha <i class="mdi mdi-information-outline"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"></i>
                    </label>
                    <input
                        class="form-control <?php if(isset($erroSenha)){if($erroSenha != "Nenhum"){echo "is-invalid";}}?> mt-2"
                        name="senha" placeholder="Crie sua Senha" type="password" aria-label="default input example">
                    <div class="invalid-feedback">
                        <?php
                        if(isset($erroSenha)){
                            if($erroSenha != "Nenhum"){
                                echo $erroSenha;
                            }
                        }
                        ?>
                    </div>


                    <!-- Campo de Texto da Comfirmação da Senha -->
                    <label for="senhac" class="mt-3">Comfirme sua Senha <i class="mdi mdi-information-outline"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"></i>
                    </label>
                    <input
                        class="form-control <?php if(isset($erroSenhac)){if($erroSenhac != "Nenhum"){echo "is-invalid";}}?> mt-2"
                        name="senhac" placeholder="Repita a Senha que criou" type="password"
                        aria-label="default input example">

                    <div class="invalid-feedback">
                        <?php
                        if(isset($erroSenhac)){
                            if($erroSenhac != "Nenhum"){
                                echo $erroSenhac;
                            }
                        }
                        ?>
                    </div>


                        <!-- Campo de Texto do Nome e Sobrenome -->
                    <label for="nome" class="mt-3">Nome e Sobrenome <i class="mdi mdi-information-outline"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"></i>
                    </label>
                    <input
                        class="form-control <?php if(isset($erroNome)){if($erroNome != "Nenhum"){echo "is-invalid";}}?> mt-2"
                        name="nome" placeholder="Insira seu Nome e Sobrenome" type="text"
                        aria-label="default input example">
                    <div class="invalid-feedback">
                        <?php
                        if(isset($erroNome)){
                            if($erroNome != "Nenhum"){
                                echo $erroNome;
                            }
                        }
                        ?>
                    </div>


                        <!-- Campo de Texto de Numero -->
                    <label for="numero" class="mt-3">Número <i class="mdi mdi-information-outline"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Titulo do Balão"></i>
                    </label>
                    <input class="form-control mt-2" name="numero" placeholder="Insira seu Número telefone" type="text"
                        aria-label="default input example">


                        <!-- Campo de Texto da Idade -->
                    <label for="idade" class="mt-3">Idade <i class="mdi mdi-information-outline"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"></i>
                    </label>
                    <input type="text" name="idade"
                        class="form-control <?php if(isset($erroIdade)){if($erroIdade != "Nenhum"){echo "is-invalid";}}?> mt-2"
                        placeholder="Insira sua Idade" name="idade" aria-label="default input example">
                    <div class="invalid-feedback">
                        <?php
                        if(isset($erroIdade)){
                            if($erroIdade != "Nenhum"){
                                echo $erroIdade;
                            }
                        }
                        ?>
                    </div>


                        <!-- Butão de Realizar Cadastro -->
                    <button type="submit" class="btn btn-outline-primary mt-3 mb-3">Realizar Cadastro<i class="mdi mdi-send"></i></button>
                </form>
                
                <!-- Tabela de dados -->
            
                <table class="table table-dark table-hover">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">SENHA</th>
                                <th scope="col">SENHAC</th>
                                <th scope="col">NOME_SOBRENOME</th>
                                <th scope="col">NUM</th>
                                <th scope="col">IDADE</th>
                            </tr>
                        </thead>
                        <thead>
                            <?php 
                                if (count($dados) == 0){
                                    echo "";
                                } else {
                                    foreach($dados as $dado){
                                        echo " 
                                            <tr>
                                                <th scope='row'>$dado[id_usuario]<th>
                                                <td>$dado[email]</td>
                                                <td>$dado[senha]</td>
                                                <td>$dado[senhaC]</td>
                                                <td>$dado[nome_sobrenome]</td>
                                                <td>$dado[numero]</td>
                                                <td>$dado[idade]</td>
                                            </tr>
                                        ";
                                    }
                                }
                            ?>
                        </thead>
                </table>
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