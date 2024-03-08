<?php
include("../config/conexao.php");

    $nome= $_POST['nome'];
    $descricao= $_POST['descricao'];
    $execucao= $_POST['execucao'];
    $preco= $_POST['preco'];
    
    //$foto3x4= $_FILES['foto3x4']['name'];

    //$uploaddir = "imgbd/3x4/";

    //$separa= explode (".", $foto3x4);
    //$separa= array_reverse ($separa);
    //$extensao= $separa[0];
    //$foto3x4f= $cpf . "." . $extensao;

    $testar = $sql->query("SELECT * FROM servicos WHERE nome = '$nome' ");

    $check = mysqli_num_rows($testar);

    if ($check != 0) {
        echo "Serviço já cadastrado!";
        header("Refresh: 1; url=../views/manager/cadastrarServicos.php");
    }
    
    else{
        //move_uploaded_file($_FILES['foto3x4']['tmp_name'], "../" . $uploaddir . $foto3x4f); 
        //$foto3x4bd = $uploaddir . $foto3x4f;
        
        $sql->query("INSERT INTO servicos(nome, descricao, execucao, preco) VALUES('$nome', '$descricao', '$execucao', '$preco')");


        echo "Serviço cadastrado com sucesso!";
        header("Refresh: 1; url=../lib/html/servicos.php");
        // if ($_SESSION['tipo_session'] != 2) {
        //     header("Refresh: 1; url=../views/manager/dashboard.php");
        //   }
        //   else{
        //     header("Refresh: 1; url=../lib/html/servicos.php");
        //   }
    }
    
?>