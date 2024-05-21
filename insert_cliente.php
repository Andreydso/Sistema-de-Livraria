<?php 
    include 'conexao.php';

    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $nrendereco = $_POST['nrendereco'];
    $cpf = $_POST['cpf'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];

    if (empty($nome) || empty($endereco) || empty($nrendereco) || empty($cpf)|| empty($cnpj) || empty($telefone)){
        echo("<script> alert('Preencha todos os campos!'); history.back()</script>");
        exit;
    }

    $insert = "INSERT INTO tb_cliente VALUES (NULL,'$nome','$endereco','$nrendereco,'$cpf','$cnpj','$telefone')";
    
    $query = mysqli_query($conexao, $insert);
 
?>