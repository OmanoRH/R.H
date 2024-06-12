
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "banco";
?>

<?php $pdo = new PDO("mysql:host=$servidor;dbname=$banco", "$usuario", "$senha");?>