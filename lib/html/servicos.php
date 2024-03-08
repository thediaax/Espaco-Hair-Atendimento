
<?php 
include("header.php");
include("../../config/conexao.php"); 

//$date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));
?>

<div class="cardserv container-fixed row  row-cols-md-3  justify-content-center text-center">
  
<?php
    $dados_cadastros = $sql->query("SELECT nome, preco, execucao FROM servicos");

    while ($linha = mysqli_fetch_array($dados_cadastros)) {
    $nome = $linha['nome'];
    $execucao = $linha['execucao'];
    $preco = $linha['preco'];
    
    
    echo<<<HTML
    
      <div class="col row" style="margin:0px; margin-bottom:10px; ">
        <div class="card">
          <div class="card-body">
            <form name="formAdd" id="formAdd" method="post" action="../../views/user/index.php">
              <h5 class="card-title">$nome</h5>
              <br>
              <h1 class="txtpr card-text">R$ $preco</h1>
              <input name="horasAtendimento" id="horasAtendimento" type="text" value="$execucao" hidden>
              <button type="submit" class="btn btn-warning">Marcar horario</button>
              <br>
              <a href="#abrirModal"> <img id="setinha" src="../../assets/setola.png"> </a> 
              <div id="abrirModal" class="modalDialog"> 
      <div>
        <h2>$nome</h2>
        <p>$preco</p>
       
        <a class="close" title="Fechar" href="#close"> X </a>
      </div>
   </div>
      
            </form>
          </div>
        </div>
      </div>

HTML;
    }
?>

</div>  

<!-- <div class="cardserv container-fixed row  row-cols-md-3  justify-content-center text-center">
    <div class="col row">
      <div class="card">

        <div class="card-body">
          <form name="formAdd" id="formAdd" method="post" action="../../views/user/index.php">
            <h5 class="card-title ">Hidratação</h5>
            <input name="servico" id="servico" type="text" value="servico" hidden readonly>
            <br>
            <h1 class="txtpr card-text">R$50,00</h1>
            <input name="horasAtendimento" id="horasAtendimento" type="text" value="30" hidden readonly>
            <button type="submit" class="btn btn-warning">Marcar horario</button>
            <br>
            <img id="setinha" src="../../assets/setola.png">
          </form>
        </div>
      </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <div class="col row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title ">Hidratação</h5>
          <br>
          <h1 class="txtpr card-text">R$50,00</h1>
          <button type="button" class="btn btn-warning">Marcar horario</button>
          <br>
          <img id="setinha" src="../../assets/setola.png">

        </div>
      </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>

    <div class="col row">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title ">Hidratação</h5>
          <br>
          <h1 class="txtpr card-text">R$50,00</h1>
          <button type="button" class="btn btn-warning">Marcar horario</button>
          <br>
          <img id="setinha" src="../../assets/setola.png">
        </div>
      </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <div class="col row">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title ">Hidratação</h5>
          <br>
          <h1 class="txtpr card-text">R$50,00</h1>
          <button type="button" class="btn btn-warning">Marcar horario</button>
          <br>
          <img id="setinha" src="../../assets/setola.png">
        </div>
      </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <div class="col row">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title ">Hidratação</h5>
          <br>
          <h1 class="txtpr card-text">R$50,00</h1>
          <button type="button" class="btn btn-warning">Marcar horario</button>
          <br>
          <img id="setinha" src="../../assets/setola.png">

        </div>
      </div>
    </div>
    <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
    <div class="col row">
      <div class="card">

        <div class="card-body">
          <h5 class="card-title ">Hidratação</h5>
          <br>
          <h1 class="txtpr card-text">R$50,00</h1>
          <button type="button" class="btn btn-warning">Marcar horario</button>
          <br>
          <img id="setinha" src="../../assets/setola.png">
        </div>
      </div>
    </div>
  </div> -->
</body>
<?php include("footer.php"); ?>
</html>