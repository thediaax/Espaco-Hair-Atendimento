<?php

include("../config/conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$celular = $_POST['celular'];
$nascimento = $_POST['nascimento'];


$sql->query("UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha', celular = '$celular', nascimento = '$nascimento' WHERE email = '$email'");

echo "Dados atualizados com sucesso";
header("Refresh: 1; url=../views/user/dashboard.php");











?>