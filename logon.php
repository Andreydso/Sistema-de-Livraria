<?php 
// recebendo dados do formulario
$login = $_POST['login'];
$senha = $_POST['senha'];

if (empty($login) || empty($senha)) {
    echo("<script> alert('Preencha todos os campos!'); history.back()</script>");
    exit;
}

// incluindo arquivos de conexão
include 'conexao.php';

//selecionar os dados no banco de dados
$select = "SELECT * from tb_user WHERE login = '$login'";

$query = mysqli_query($conexao,$select);

$result = mysqli_fetch_array($query);

$nome_banco = $result['login'];
$senha_banco = $result['senha'];
    
// comparação de dados no banco de dados para acessar
if ($login == $nome_banco && $senha == $senha_banco) {
    header('location: cadastro_cliente.html');
} else {
    echo("<script> alert('usuário invalido!'); history.back()</script>");
};

?>