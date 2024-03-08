<?php 
include("header.php"); 

include("../../config/conexao.php"); 
//include("../../class/session.php");

if ($_SESSION['tipo_session'] != 2) {
  session_destroy();
  header("Refresh: 0");
  echo "ERRO!!!";

}


$nome = $_SESSION['nome_session'];
$email = $_SESSION['email_session'];
$avatar = $_SESSION['avatar_session'];  


 
?>

<link rel="stylesheet" href="../../lib/css/css.css">
      <div class="container-fluid col-rows-md-3 text-white text-center" style="max-width: 600px;">
      <h1 clas>Dashboard</h1>
      <img class="imgava" src=../../<?php echo $avatar; ?> height=150px>
     <h4><?php echo "Olá, ".$nome."." ?></h4>
        <div class="col row">
        <a href='../user/formAlterar.php?email=<?php echo $email; ?>' style="padding: 15px;border-radius: 15px;" type="button" class="btn btn-warning">Alterar meus dados</a>
          <a href='../user/alterarAvatar.php?email=<?php echo $email; ?>' style="padding: 15px;border-radius: 15px;" type="button" class="btn btn-warning">Alterar avatar</a>
          <a href="../../lib/html/formCadastrar.php" style="padding: 15px;border-radius: 15px;" type="button" class="btn btn-warning">Cadastrar
            clientes</a>
          <a href="listarClientes.php" type="button" style="padding: 15px;border-radius: 15px;" class="btn btn-warning">Ver clientes
            cadastrados</a>
          <br>
          <a href="cadastrarServicos.php" type="button" style="padding: 15px;border-radius: 15px;" class="btn btn-warning">Adicionar
            Serviço</a><br>
          <br>
          <a href="listarServicos.php" type="button" style="padding: 15px;border-radius: 15px; border-radius: 15px;"
            class="btn btn-warning">Listar Serviços</a>
          <br>
          <br>
          <a type="button" href="index.php" style="padding: 15px;border-radius: 15px;" class="btn btn-warning">Horários
            agendados</a>
          <br>
          <a href="../../class/deslogar.php" type="button" style="padding: 15px;border-radius: 15px;" class="btn btn-warning">Sair dessa conta</a><br>
        </div>
</body>
<?php //include("../../lib/html/footer.php"); ?>
</html>