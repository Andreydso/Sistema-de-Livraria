<?php 
    include 'conexao.php';

    $nome = $_POST["nome"];
    $endereco = $_POST["endereco"];
    $nrendereco = $_post ["nrendereco"];
    $cpf = $_POST["cpf"];
    $cnpj = $_POST["cnpj"];
    $telefone = $_POST["telefone"];

    $insert = "INSERT INTO tb_cliente VALUES (NULL,'nome','endereco','nrendereco','cpf','cnpj','telefone')";
    
    $query = mysqli_query($conexao, $insert) or die(mysqli_error($conexao));
 
?>