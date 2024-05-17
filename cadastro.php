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
                        <label for="E-mail">E-mail <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top"></i></label>
                        <input  class="form-control mt-2" type="text" placeholder="Insira seu E-mail" aria-label="default input example">
                        <label for="Senha">Senha</label>
                        <input class="form-control mt-2" placeholder="Crie sua Senha" type="text" aria-label="default input example">
                        <label for=""></label>
                        <input class="form-control mt-2" type="text" aria-label="default input example">
                        <label for=""></label>
                    </form>
                </div>
                <div class="col">
                    <form method="POST">
                        <input class="form-control mt-2" type="text" aria-label="default input example">
                        <label for=""></label>
                        <input class="form-control mt-2" type="text" aria-label="default input example">
                        <label for=""></label>
                        <input class="form-control mt-2" type="text" aria-label="default input example">
                    </form>
                </div>
            </div>
        </div>

        <script href="JS/bootstrap.bundle.min.js" ></script>
        <script>
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
        </script>
    </body>
</html>