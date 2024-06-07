<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Restaurante</title>
    </head>
    <body>


    <!-- Banco de Dados -->
        <?php
        
            require("banco.php");

            $sql = $pdo -> prepare("INSERT INTO clientes (id_cliente, nome_cliente, cpf_cliente, end_cliente) VALUES (NULL, 'Jefersson', 12345678969, 'rua do amor')");


            $sql = $pdo -> prepare("SELECT * FROM clientes");


            $sql -> execute();

        ?>

    </body>
</html>