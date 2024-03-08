<?php include("header.php"); 
include("../../class/session.php");
include("../../config/conexao.php"); 
if ($_SESSION['tipo_session'] != 2) {
  session_destroy();
  header("Refresh: 0");
  echo "ERRO!!!";

}



$preco = $_SESSION['email_session'];
?>
    <div class="box">
        <fieldset>
        <legend><b>Cadastros</b></legend>
            <table class="table text-light">
            <tr>
                    <td class="titleTable">ID</td>
                    <td class="titleTable">Nome</td>
                    <td class="titleTable">Preço</td>
                    <td class="titleTable">Execução (min)</td>
                    <td class="titleTable">Descrição</td>
                </tr>
                </select>
<?php
 

    $dados_cadastros = $sql->query("SELECT * FROM servicos");

    while ($linha = mysqli_fetch_array($dados_cadastros)) {
    $id = $linha['id'];
    $nome = $linha['nome'];
    $preco = $linha['preco'];
    $execucao = $linha['execucao'];
    $descricao = $linha['descricao'];



    echo "
    <tr>
        <td>$id</td>
        <td>$nome</td>
        <td>$preco</td>
        <td>$execucao</td>
        <td>$descricao</td>
    </tr>
    ";
}
?>
</select>
            </table>
        </fieldset>
    </div>
    <?php include("footer.php"); 
    ?>

</body>
</html>