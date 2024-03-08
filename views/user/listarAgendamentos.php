<?php include("header.php"); ?>
    <div class="box">
        <fieldset>
        <legend><b>Cadastros</b></legend>
            <table class="table">
            <tr>
                    <td class="titleTable">Serviço</td>
                    <td class="titleTable">Data e hora</td>
                </tr>

<?php
    include("../../config/conexao.php");  
    include("../../class/session.php");  
    
    $email = $_SESSION['email_session'];
    $dados_cadastros = $sql->query("SELECT * FROM events WHERE description = '$email'");

    while ($linha = mysqli_fetch_array($dados_cadastros)) {
    $servico = $linha['title'];
    $datetime = $linha['start'];


    echo "
    <tr>
        <td>$servico</td>
        <td>$datetime</td>
    </tr>
    ";
}
?>
            </table>
        </fieldset>
    </div>


</body>
</html>