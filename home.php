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
                    <form action="receber_post.php" method="POST">
                        <label class="e-mail mt-3">E-mail:</label>
                        <input id="e-mail" class="form-control mt-2" type="text" name="e-mail" placeholder="Insira seu E-mail aqui" aria-label="default input example">
                        <label class="senha mt-3">Crie sua Senha:</label>
                        <input id="senha" class="form-control mt-2" type="password" name="senha" placeholder="Insira sua Senha aqui" aria-label="default input example">
                        <button type="submit" class="btn btn-outline-primary mt-3">Realizar Login</button>
                    </form>
                </div>
                <div class="col"></div>
            </div>
        </div>
    <script href="JS/bootstrap.bundle.min.js"></script>
    <script href="JS/script.js"></script>
    </body>
</html>