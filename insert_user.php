<?php 
$nome = $_POST["nome"];
$login = $_POST["login"];
$setor = $_POST["setor"];
$senha = $_POST["senha"];

include 'conexao.php';

$insert = "INSERT INTO tb_user VALUES (NULL,'nome','login','setor','senha',)";

$query = mysqli_query($conexao, $insert) or die(mysqli_error($conn));
?>