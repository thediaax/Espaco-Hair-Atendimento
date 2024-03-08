<?php 

include("../../config/conexao.php");
include("header.php");

$email = $_GET['email'];
$dados = $sql->query("SELECT * FROM usuarios WHERE email = '$email' ");

while ($linha = mysqli_fetch_array($dados)) {

    $nome = $linha['nome'];
    $email = $linha['email'];
    $senha = $linha['senha'];
    $avatar = $linha['avatar'];
}

?>
<link rel="stylesheet" href="../../lib/css/css.css">
  <div class="container-fluid" style="height:100vh;">
  <div class="container-md position relative"

    style=" width:55%; border-color: rgb(255, 255, 255); border-width:2px ;border-style: solid;border-radius: 20px;">
    <h1 class="text-center text-light position-relative">Atualizar dados</h1>
    <br>
     
<div class="container-fluid">
<div style="background-color:black;" class="text-light container-lg position-relative "
  style=" border-color: white; border-width:2px ;border-style: solid;border-radius: 20px;">
    <div class="box">
        <form action="../../class/updateAvatar.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend><b>Alterar Foto</b></legend>
                <input type="hidden" name="email" class="inputUser" value="<?php echo $email; ?>" readonly>
                <br>
                <div class="inputBox"> 
                    <input type="file" name="avatar" class="inputUser text-break" value="<?php echo $avatar; ?>">
                </div>
                <br><br>
                    <input type="submit" value="Atualizar" id="submit">
            </fieldset>           
        </form>
  </div>
  </div>
   
 
</div>
</body>
</html>