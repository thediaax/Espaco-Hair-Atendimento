<?php include("header.php"); 

if ($_SESSION['tipo_session'] != 2) {
  session_destroy();
  header("Refresh: 0");
  echo "ERRO!!!";

}

$email = $_SESSION['email_session'];
?>
<link rel="stylesheet" href="../../lib/css/css.css">
<!-- <div class="position-absolute top-50 start-50 translate-middle"  style="width: 523px  ; height: 394px; border-color: rgb(255, 255, 255); border-width:2px ;border-style: solid;border-radius: 20px;"></div> -->
<div class="container-fluid" sodium_crypto_kx_client_session_keys>
<div class="container-md position-absolute top-50 start-50 translate-middle"


  style="width: 723px  ; height: 580px; border-color: rgb(255, 255, 255); border-width:2px ;border-style: solid;border-radius: 20px;">
  <h1 class="centralizacao text-light  position-relative">Cadastro Serviço </h1>
  <br>
  <form class="text-light" method="POST" action="../../class/cadastrarServico.php" enctype="multipart/form-data">
    <div class="row mb-3 bg-li">
      <label for="inputText3" class="col-sm-2 col-form-label ">Nome</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="nome">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Preço</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="preco">
      </div>
    </div>
    <label for="inputEmail3" class="col-sm-2 col-form-label">Tempo de execução (min)</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="execucao">
      <br> <br>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
      <textarea name ="descricao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
      <button type="submit"
        class="btn btn-primary start-50 position-absolute translate-middle-x">Cadastrar Serviço</button>
    </div>
</div>


<div class="row mb-3">
  <div class="col-sm-10 offset-sm-2">

  </div>

</div>
</div>
</div>
</div>
<br> <br>
</form>














<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
<?php include("footer.php"); ?>

</html>