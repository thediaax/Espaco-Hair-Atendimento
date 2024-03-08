<?php include("header.php"); 
include("../../class/session.php");

if ($_SESSION['tipo_session'] != 2) {
  session_destroy();
  header("Refresh: 0");
  echo "ERRO!!!";

}



$email = $_SESSION['email_session'];
?>
    <div class="container-md">
        <fieldset>
        <legend><b>Cadastros</b></legend>
            <table class="table text-light">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
       
      <th scope="col">Celular</th>
            <th scope="col">Nascimento</th>
            <th scope="col">Avatar</th>

      <th scope="col">Alterar dado</th>
      <th scope="col">Alterar foto</th>
      <th scope="col">Excluir</th>
    
   
     
                    <!-- <td class="titleTable">ID</td>
                    <td class="titleTable">Nome</td>
                    <td class="titleTable">Email</td>
                    <td class="titleTable">Senha</td>
                    <td class="titleTable">Celular</td>
                    <td class="titleTable">Nascimento</td>
                    <td class="titleTable">Tipo</td>
                    <td class="titleTable">Foto</td> -->
                </tr>
                </thead>
  <tbody>

<?php
    include("../../config/conexao.php");  

    $dados_cadastros = $sql->query("SELECT * FROM usuarios");

    while ($linha = mysqli_fetch_array($dados_cadastros)) {
    $id = $linha['id'];
    $nome = $linha['nome'];
    $email = $linha['email'];
    $senha = $linha['senha'];
    $celular = $linha['celular'];
    $nascimento = $linha['nascimento'];
    $avatar = $linha['avatar'];


    echo "
    <tr>
      
      <td>$id</td>
      <td>$nome</td>
      <td>$email</td>
      <td>$celular</td>
      
      <td>$nascimento</td>
      <td$avatar</td>
  
      <td><img class='' src=../../$avatar height=90px></td>
      <td><a href='editarUsuario.php?email=$email'>Alterar dados</a></td>
        <td><a href='../user/alterarAvatar.php?email=$email'>Alterar avatar</a></td>
        <td><a href='../../class/excluirUsuario.php?email=$email' onclick=\"return confirm('Quer mesmo apagar esses dados?');\">Excluir cadastro</a></td>
       
        </tr>
 

    
    ";
}
?>
            </table>
        </fieldset>
    </div>
    <?php include("footer.php"); 
    ?>

</body>
</html>