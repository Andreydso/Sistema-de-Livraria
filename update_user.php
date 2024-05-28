<?php
//Recebendo dados do formulario

$codigo = $_POST['id'];
$nome = $_POST['nome'];
$setor = $_POST['setor'];
$login = $_POST['login'];

//Inserindo dados no banco

include 'conexao.php';

//Dados para inserir os dados
$update = "UPDATE `tb_user` SET `nm_usuario` = '$nome ', `nm_setor` = '$setor', `login` = '$login' WHERE `id_user` = $codigo
";


//inserindo os dados no banco de dados utilizando a função mysqli
$query = mysqli_query($conexao, $update);

echo "Inserido com Sucesso";

?>