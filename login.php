<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="CSS/bootstrap.min.css">
        <link rel="stylesheet" href="codigo prof/style.css">
    </head>
    <body>

    
        <!-- conexao com o banco -->
        <?php 
            require ("banco.php");    
        ?>

        <?php
            if($_SERVER['REQUEST_METHOD'] == "POST"){

                $email = $_POST['email'];
                $pass = $_POST['senha'];

                $sql = $pdo->prepare("SELECT * FROM usuario WHERE user_email = ? AND user_pass = ?");
                $sql->execute([$email, $pass]);

                $dados = $sql->fetch();

                //if($dados && $dados['user_email'] == $email && $dados['pass'] == $pass){
                    //header('location:brigado.html');
                //} else{
                    //echo "senha errada";
                //}
            }
        ?>

        <div class="wrapper fadeInDown">
    
            <div class="content-login">

                <!-- login -->
                <h2 class="active"> Login </h2>

                <!-- inputs do login -->
                <form class="box-login" method="post" action="#">
                    <input type="email" id="email" class="campo" name="email" placeholder="E-mail">
                    <input type="text" id="password" class="campo" name="senha" placeholder="Senha">
                    <input type="submit" class="botao" value="Entrar">
                </form>

                    <!-- senha -->
                <div class="box-lembrar-senha">  
                    <a class="link" href="#">Lembrar Senha</a>
                </div>

            </div>

        </div>
            
    </body>
</html>