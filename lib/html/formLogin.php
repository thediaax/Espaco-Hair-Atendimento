<?php include("header.php"); ?>
<div class="container-fluid" style="height:100vh;">
<!-- <div class="position-absolute top-50 start-50 translate-middle"  style="width: 523px  ; height: 394px; border-color: rgb(255, 255, 255); border-width:2px ;border-style: solid;border-radius: 20px;"></div> -->
<div class="container-lg position-relative align-self-center"
  style="width:70%;height:45%; border-color: rgb(255, 255, 255); border-width:2px ;border-style: solid;border-radius: 20px;">
  <h1 id="loginz" class="position-relative text-white text-center align-middle  ">Login </h1>

  <form class="text-light align-middle" method="POST" action="../../class/login.php" enctype="multipart/form-data">
    <div class="row mb-3">
      <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-6">
        <input type="email" name="email" class="form-control" id="inputEmail3"  >
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Senha</label>
      <div class="col-sm-6">
        <input type="password" name="senha" class="form-control" id="inputPassword3">
        <div class="center ">
        <bR>
        <button type="submit" class="btn btn-primary position-relative ">Logar</button>
   <br> <text class="text-muted">Não é cadastrado? <a  class="text-warning" href="formCadastrar.php">Cadastre-se aqui</a>

     
       
  
          
          </div>
        </div></div>
      </div>
    </div>
</div>












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>