<?php 
$nome = $_POST['nome'];
$login = $_POST['login'];
$setor = $_POST['setor'];
$senha = $_POST['senha'];

if (empty($nome) || empty($login) || empty($setor) || empty($senha)) {
    echo("<script> alert('Preencha todos os campos!'); history.back()</script>");
    exit;
}

include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (NULL,'$nome','$login','$setor','$senha')";

$query = mysqli_query($conexao, $insert);
?>