<?php include("header.php"); ?>
  <!-- <div class="position-absolute top-50 start-50 translate-middle"  style="width: 523px  ; height: 394px; border-color: rgb(255, 255, 255); border-width:2px ;border-style: solid;border-radius: 20px;"></div> -->
  <div class="container-fluid position-relative" style="height:100vh;">
  <div class="container-md position-relative"
  style="width:55% ; border-color: rgb(255, 255, 255); border-width:2px ;border-style: solid;border-radius: 20px;">
    <h1 class="text-light  position-relative text-center">Cadastro</h1>
    <br>
    <form class="text-light" method="POST" action="../../class/cadastrarUsuario.php" enctype="multipart/form-data">
      <div class="row mb-3 bg-li ">
        <label for="inputText3" class="col-sm-2 col-form-label ">Nome</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="nome" required>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-8">
          <input type="email" class="form-control" name="email" required>
        </div>
      </div>
      <div class="row mb-3 bg-li ">
        <label for="inputPassword3" class="col-sm-2 col-form-label ">Senha</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="senha" required>
        </div>
      </div>
      <div class="row mb-3 bg-li ">
        <label for="inputPassword3" class="col-sm-2 col-form-label ">Telefone</label>
        <div class="col-sm-8">
          <input type="number" class="form-control" name="celular" required>
        </div>
      </div>
      <div class="row mb-3 bg-li ">
        <label for="inputPassword3" class="col-sm-2 col-form-label ">Data de nascimento</label>
        <div class="col-sm-8">
          <input type="date" class="form-control" name="nascimento" required>
        </div>
      </div>
      <label for="avatar">Foto de perfil:</label>
      <br>
      <input type="file" name="avatar" accept="image/*" id="addImg" >
      <input type="number" value="1" class="form-control" name="tipo" hidden readonly>
      <div class="row mb-3">
      </div> <br> <br>
      <button type="submit" style="margin-bottom:10px ;"
        class="btn btn-primary ">Cadastrar</button>
    </form>
  </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f8V8Qbsw3"
    crossorigin="anonymous"></script>
    <?php include("footer.php"); ?>
</body>

</html>

<!-- codigo css especifico

.centralizacao{
  margin-left: 184px;

}
input[type=number]::-webkit-inner-spin-button { 
  -webkit-appearance: none;
  
}
input[type=number] { 
 -moz-appearance: textfield;
 appearance: textfield;
 

} -->