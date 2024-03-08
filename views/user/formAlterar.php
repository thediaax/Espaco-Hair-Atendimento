<?php include("header.php"); 
include("../../config/conexao.php");

$email = $_SESSION['email_session'];
$senha = $_SESSION['senha_session'];
$nome = $_SESSION['nome_session'];
$celular = $_SESSION['celular_session'];
$nascimento = $_SESSION['nascimento_session'];

?>
  <!-- <div class="position-absolute top-50 start-50 translate-middle"  style="width: 523px  ; height: 394px; border-color: rgb(255, 255, 255); border-width:2px ;border-style: solid;border-radius: 20px;"></div> -->
  <link rel="stylesheet" href="../../lib/css/css.css">
  <div class="container-fluid" style="height:100vh;">
  <div class="container-md position relative"

    style=" width:55%; border-color: rgb(255, 255, 255); border-width:2px ;border-style: solid;border-radius: 20px;">
    <h1 class="text-center text-light position-relative">Atualizar dados</h1>
    <br>
    <form class="text-light" method="POST" action="../../class/updateUsuario.php" enctype="multipart/form-data">
      <div class="row mb-3 bg-li ">
        <label for="inputText3" class="col-sm-2 col-form-label ">Nome</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="nome" value="<?php echo $nome; ?>">
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-8">
          <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" hidden>
        </div>
      </div>
      <div class="row mb-3 bg-li ">
        <label for="inputPassword3" class="col-sm-2 col-form-label ">Senha</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="senha" value="<?php echo $senha; ?>">
        </div>
      </div>
      <div class="row mb-3 bg-li ">
        <label for="inputPassword3" class="col-sm-2 col-form-label ">Telefone</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" name="celular" value="<?php echo $celular; ?>">
        </div>
      </div>
      <div class="row mb-3 bg-li ">
        <div class="col-sm-8">
          <input type="date" class="form-control" name="nascimento" value="<?php echo $nascimento; ?>" hidden>
        </div>
      </div>
      <div class="row mb-3">
      </div> <br> <br>
      <button type="submit" style="margin-bottom:10px ;"
        class="btn btn-primary position-relative ">Atualizar</button>
    </form>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
</body>
<?php //include("footer.php"); ?>
</html>

