<?php
include("../config/conexao.php");

    $nome= $_POST['nome'];
    $email= $_POST['email'];
    $senha= $_POST['senha'];
    $celular= $_POST['celular'];
    $nascimento= $_POST['nascimento'];
    $tipo= $_POST['tipo'];
    
    $avatar= $_FILES['avatar']['name'];

    $uploaddir = "assets/avatar/";

    $separa= explode (".", $avatar);
    $separa= array_reverse ($separa);
    $extensao= $separa[0];
    $avatarf= $email . "." . $extensao;

    $testar = $sql->query("SELECT * FROM usuarios WHERE email = '$email' ");

    $check = mysqli_num_rows($testar);

    if ($check != 0) {
        echo "E-mail já cadastrado!";
        header("Refresh: 1; url=../lib/html/formCadastrar.php");
    }
    
    else{
        move_uploaded_file($_FILES['avatar']['tmp_name'], "../" . $uploaddir . $avatarf); 
        $avatarbd = $uploaddir . $avatarf;
        
        $sql->query("INSERT INTO usuarios(nome, email, senha, celular, nascimento, tipo, avatar) VALUES('$nome', '$email', '$senha', '$celular', '$nascimento', '$tipo', '$avatarbd')");


        echo "Dados cadastrados com sucesso!";
        header("Refresh: 1; url=../index.php");
    }
    
?>