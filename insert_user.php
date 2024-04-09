<?php 
// recebendo dados do formulário

$nome = $_POST["nome"];
$login = $_POST["login"];
$setor = $_POST["setor"];
$senha = $_POST["senha"];

echo "$nome";
echo "<br>";
echo "$login";
echo "<br>";
echo "$setor";
echo "<br>";
echo "$senha";
echo "<br>";


print_r($_POST)

?>