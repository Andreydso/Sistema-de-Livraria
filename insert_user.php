<?php 
// recebendo dados do formulário

$nome = $_POST["nome"];
$login = $_POST["email"];
$setor = $_POST["setor"];
$senha = $_POST["senha"];

echo "$nome";
echo "<br>";

print_r($_POST)

?>