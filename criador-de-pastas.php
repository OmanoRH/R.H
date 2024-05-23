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
            
            if (!is_dir($pasta1,)) {
                mkdir($pasta1, 755, true);
            }else{
                rmdir("$pasta1");
            }


           /* $nome_arquivo = ".txt";
            $arquivo = fopen($pasta1.$nome_arquivo, 'a+');
            fwrite($arquivo, "<qnwejfwnfgwejkngwgnwekgwnegkweng".PHP_EOL);
            fwrite($arquivo, "3ROIQWJEOI0WJMTGEWPKGJMWEGPKLEWMJNGKWERPGMNEPOGEWMGPWGMNERGNWEKLRGG".PHP_EOL);
            fwrite($arquivo, "wkmqfkofndsjkdngjnbdkmgwnjkndjoiqnwfqnewjfewjqnewjqnwokqwnfoqenfqwefnqwjkefnqwojfwnjegnwkjegnwkengfwkjefnwjlkefn".PHP_EOL);
            fclose($arquivo);

            $caminho_arquivo = $pasta1.$nome_arquivo;

            if(file_exists($caminho_arquivo) && is_file($caminho_arquivo)){
                $abrir_arquivo = fopen($caminho_arquivo, "r");

                while (feof($abrir_arquivo)) {
                    echo fgets($abrir_arquivo)."<br>";
                }

            }
            
            if (is_dir($pasta1)) {
                foreach(scandir($pasta1) as $lixo){
                    $caminho = $pasta.$lixo;
                    if(file_exists($caminho)){

                    }
                }
            }*/
        
            $agora = date("Y/m/d H:i:s");
            echo "$agora <br>";
            
            $hoje = date("l F Y");
            echo "Today is $hoje <br>";

            
            $data_niver = "2024/10/16";
            $data_hoje = date("Y/m/d");

            $data = strtotime($data_niver) - strtotime($data_hoje); 
            $ate_niver = floor($data / (60*60*24));

            if ($ate_niver > 0) {
                echo "Meu aniversário é daqui a $ate_niver dias";
            } elseif ($ate_niver < 0) {
                echo "Meu aniversário foi a $ate_niver dias atrás";
            } else {
                echo "MEU ANIVERSÁRIO É HOJE";
            }

            $data_formatada = explode("/", $agora);
            $data_formatada = $data_formatada[2]."/".$data_formatada[1]."/".$data_formatada[0];

        ?>


        <!-- Linkagem do JS -->
        <script src="JS/bootstrap.bundle.min.js"></script>
    </body>

</html>