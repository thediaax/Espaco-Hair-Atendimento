<?php
    session_start();
    
    include("../config/conexao.php");
    //include("../lib/html/header.php"); 

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $logar = $sql->query("SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");

    while ($linha = mysqli_fetch_array($logar)){
    $tipo = $linha['tipo'];
    $avatar = $linha['avatar'];
    $nome = $linha['nome'];
    $celular = $linha['celular'];
    $nascimento = $linha['nascimento'];
    }

    $contagem = mysqli_num_rows($logar);

    if ($contagem == 1 AND $tipo == 1){
        $_SESSION['email_session'] = $email;
        $_SESSION['senha_session'] = $senha;
        $_SESSION['tipo_session'] = $tipo;
        $_SESSION['avatar_session'] = $avatar;
        $_SESSION['nome_session'] = $nome;
        $_SESSION['celular_session'] = $celular;
        $_SESSION['nascimento_session'] = $nascimento;

        header("location: ../views/user/dashboard.php");
    }

    elseif ($contagem == 1 AND $tipo == 2){
        $_SESSION['email_session'] = $email;
        $_SESSION['senha_session'] = $senha;
        $_SESSION['tipo_session'] = $tipo;
        $_SESSION['avatar_session'] = $avatar;
        $_SESSION['nome_session'] = $nome;
        $_SESSION['celular_session'] = $celular;
        $_SESSION['nascimento_session'] = $nascimento;

        header("location: ../views/manager/dashboard.php");
    }
    
    else {
        unset($_SESSION['login_session']);
        unset($_SESSION['senha_session']);
        unset($_SESSION['tipo_session']);

        echo "Email e/ou senha incorreto";
        header("Refresh: 1; url=../lib/html/formLogin.php");
    }

?>