<?php include("../../class/session.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espaço Hair</title>
    <link rel="stylesheet" href="<?php echo DIRPAGE.'/lib/css/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo DIRPAGE.'/lib/js/FullCalendar/main.min.css'; ?>">
    <link rel="stylesheet" href="../../lib/css/css.css">
    
<!-- <link rel="stylesheet" href="style/css.css"> -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap');
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../lib/css/css.css">
  </head>
  <header>
  <nav class="navbar navbar-expand-lg bg-faded " style="background-color: #000; font-family: 'Montserrat', sans-serif; font-size: 17px;" >
        <div class="container-fluid">
            <nav class="navbar bg-faded" style="background-color: #000;">    
                        
                <div class="container-fluid" style="padding-left: 99px;">
                    
                  
                  <a class="navbar-brand" href="../../index.php">
                    <img src="../../assets/logo.png" alt="Logo" width="197" height="65" class="d-inline-block align-text-top">
               
                  </a>
                </div>
              </nav>
              <div class="position-relative">
                <div class="position-absolute top-0 start-0"></div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown" style="padding-top:15px;">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="text-white nav-link active"  aria-current="page" href="../../index.php" >Home</a>
              </li>
              <li class="nav-item">
                <a class="text-white nav-link" href="../../lib/html/servicos.php">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="text-white nav-link" href="../../lib/html/contato.php">Contato</a>
              </li>
              <li class="nav-item">
                <a class="text-white nav-link" href="../../lib/html/quemSomos.php">Quem somos nós?</a>
              </li>
              <li class="nav-item">
                <a class="text-white nav-link" href="#">Galeria</a>
              </li>
               
              <li class="nav-item">
              <a class="nav-link btn btn-warning" href="../../views/user/dashboard.php" style="color:#000;">Área do Usuário</a>
</li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
    </div>
  </nav>
</header>
<body style="font-family: 'Montserrat', sans-serif; ">
