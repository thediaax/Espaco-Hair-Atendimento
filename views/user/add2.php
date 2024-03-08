<?php include("header.php"); 
include("../../class/session.php");
include("../../config/conexao.php"); 

$email = $_SESSION['email_session'];
?>



<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'/controllers/ControllerAdd.php'; ?>">

    <select name="horasAtendimento" id="horasAtendimento">
<?php
 
 $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));
 //$horasAtendimento= $_POST['horasAtendimento'];
 //echo $horasAtendimento;
 $nome_session = $_SESSION['nome_session'];
 $email_session = $_SESSION['email_session'];
 //echo $nome;
 //echo $servico;
 //echo $varia;

    $dados_cadastros = $sql->query("SELECT * FROM servicos");

    while ($linha = mysqli_fetch_array($dados_cadastros)) {
    $id = $linha['id'];
    $nome = $linha['nome'];
    $preco = $linha['preco'];
    $execucao = $linha['execucao'];
    $descricao = $linha['descricao'];

    // $junto = $execucao.".".$nome;

    echo<<<HTML
        <option value="">$nome</option>
    HTML;
    
    

    // $separa= explode (".", $junto);
    // $separa= array_reverse ($separa);
    // $extensao= $separa[0];
    // $juntof= $extensao;
}

?>
    </select><br>
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
    Cliente: <input type="text" name="title" id="title" value="oi"><br>
    Serviço: <input type="text" name="description" id="description" value="<?php echo $nome_session; ?>"><br>
    Tempo de serviço:
    <input type="submit" value="Agendar">
</form>


</body>
</html>