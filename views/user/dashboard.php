<?php 
include("header.php"); 
include("../../config/conexao.php");
//include("../../class/session.php");

if ($_SESSION['tipo_session'] == 1 ) {
  
}

elseif ($_SESSION['tipo_session'] == 2 ) {
  header("url=../manager/dashboard.php");

}

else{
  session_destroy();
  header("Refresh: 0");
  echo "ERRO!!!";
}


$nome = $_SESSION['nome_session'];
$email = $_SESSION['email_session'];
$avatar = $_SESSION['avatar_session'];


?>
<link rel="stylesheet" href="../../lib/css/css.css">
      <div class="container-fluid col-rows-md-3 text-center text-white" style="max-width: 600px;">
      <h1>Dashboard</h1>
      <img class="imgava" src=../../<?php echo $avatar; ?> height=150px>
      <h4><?php echo "Olá, ".$nome."." ?></h4>
        <div class="col row">
          <a href='formAlterar.php?email=<?php echo $email; ?>' style="padding: 15px;border-radius: 15px;" type="button" class="btn btn-warning">Alterar meus dados</a>
          <a href='alterarAvatar.php?email=<?php echo $email; ?>' style="padding: 15px;border-radius: 15px;" type="button" class="btn btn-warning">Alterar avatar</a>
          <a href="../../lib/html/servicos.php" style="padding: 15px;border-radius: 15px;" type="button" class="btn btn-warning">Agendar um serviço</a>
          <a href="listarAgendamentos.php" type="button" style="padding: 15px;border-radius: 15px;" class="btn btn-warning">Meus agendamentos</a>
          <br>
          <a href="../../class/deslogar.php" type="button" style="padding: 15px;border-radius: 15px;" class="btn btn-warning">Sair dessa conta</a><br>
          <br>
        </div>
</body>
<?php //include("../../lib/html/footer.php"); ?>
</html>