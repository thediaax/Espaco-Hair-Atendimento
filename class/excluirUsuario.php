<?php
    include("../config/conexao.php");

    $email = $_GET["email"];

$dados_cadastros = $sql->query("SELECT * FROM usuarios WHERE email = 'email'");

    while ($linha = mysqli_fetch_array ($dados_cadastros)) {
        $avatar = $linha['avatar'];
    };

    unlink("../$avatar");

    mysqli_query($sql, "DELETE FROM usuarios WHERE email = '$email'");
    
    //header("Refresh: 0; url=../views/manager/listarClientes.php");
    

?>