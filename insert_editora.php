<?php 
    include 'conexao.php';

    $editora = $_POST['nm_editora'];
    $endereco = $_POST['nm_endereco'];
    $nrendereco = $_POST['nr_endereco'];
    $bairro = $_POST['bairro'];
    $telefone = $_POST['nr_telefone'];
    $gerente = $_POST['nm_gerente'];

    if (empty($editora) || empty($endereco) || empty($nrendereco) || empty($bairro) || empty($telefone) || empty($gerente)) {
        echo("<script> alert('Preencha todos os campos!'); history.back()</script>");
        exit;
    }

    $insert = "INSERT INTO tb_editora VALUES (NULL,'$editora','$endereco',
    $nrendereco,'$bairro','$telefone','$gerente')";
    
    $query = mysqli_query($conexao, $insert);

?>