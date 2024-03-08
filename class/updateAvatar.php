<?php

include("../config/conexao.php");

$email= $_POST['email'];

$avatar= $_FILES['avatar']['name'];

$uploaddir = "assets/avatar/";

$separa= explode (".", $avatar);
$separa= array_reverse ($separa);
$extensao= $separa[0];
$avatarf= $email . "." . $extensao;
$avatarbd = $uploaddir . $avatarf;

$sql->query("UPDATE usuarios SET avatar = '$avatarbd' WHERE email = '$email'");

move_uploaded_file($_FILES['avatar']['tmp_name'], "../" . $uploaddir . $avatarf); 


echo "Foto atualizada com sucesso";
echo "Avatar atualizado com sucesso";
header("Refresh: 1; url=../views/user/dashboard.php");











?>