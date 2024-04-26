<?php 
    $servidor = "localhost";
    $user = "root";
    $senha = "root";
    $banco = "bd_livraria";

    $conexao = new mysqli($servidor, $user, $senha, $banco);
    if ($conexao->connect_error) {
    die("Falha na conexão: ". $conexao->connect_error);
    } else {
    echo "Conexão bem sucedida!";
    }

?>