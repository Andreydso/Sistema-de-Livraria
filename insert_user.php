<?php 
$nome = $_POST['nome'];
$login = $_POST['login'];
$setor = $_POST['setor'];
$senha = $_POST['senha'];

include 'conexao.php';

$select = "SELECT * from tb_user WHERE login = '$login'";
$query = mysqli_query($conexao,$select);

$result = mysqli_fetch_array($query);



if (empty($nome) || empty($login) || empty($setor) || empty($senha)) {
    echo("<script> alert('Preencha todos os campos!'); history.back()</script>");
    exit;
}

$login_banco = $result['login'];

if ($login == $login_banco) {
    echo("<script> alert('Email já cadastrado!'); history.back()</script>");
    exit;
}

include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (NULL,'$nome','$login','$setor','$senha')";

$query = mysqli_query($conexao, $insert);
?>