<?php
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['id_session']) and !isset($_SESSION['nome_session']) and !isset($_SESSION['email_session']) and !isset($_SESSION['senha_session']) and !isset($_SESSION['celular_session']) and !isset($_SESSION['nascimento_session']) and !isset($_SESSION['tipo_session'])) {

    echo "Faça login para continuar!"; ##Abrir uma tela de alert/estilizar para aparecer isso
    header("Refresh: 1; url=../../lib/html/formLogin.php");
    exit;
    
}


?>