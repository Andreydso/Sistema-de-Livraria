<?php 
// recebendo dados do formulario
$nome = $_POST['login'];
$senha = $_POST['senha'];

// incluindo arquivos de conexão
include 'conexao.php';

//selecionar os dados no banco de dados
$select = "SELECT * from tb_user WHERE nm_usuario = '$nome'";

$query = mysqli_query($conexao,$select);

$result = mysqli_fetch_array($query);

$nome_banco = $result['nm_usuario'];
$senha_banco = $result['senha'];
    
// comparação de dados no banco de dados para acessar
if ($nome == $nome_banco && $senha == $senha_banco) {
    header('location: cadastro_cliente.html');
} else {
    echo("<script> alert('usuário invalido!'); history.back()</script>");
};

?>