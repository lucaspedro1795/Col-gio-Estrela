<?php

session_start();

 

require_once 'init_prof.php';

 

require 'check_prof.php';

?>

<!doctype html>

<html>

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Colégio Estrela</title>

    <!-- FAVICON-->
    <link rel="shortcut icon" href="images/icons/logo.png" type="image/x-icon">

    <!-- CSS  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

    
      

    </head>

 

    <body>

    <nav class="indigo darken-34" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="center brand-logo"><img class="logo"
            src="../images/logo.png" style="width:90px; height:60px;" alt="Logo" /></a>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="notas/form-add-nota.php" style="color: indigo; font-weight: 500;">Lançar Notas</a></li>
                <li><a href="frequencia/frequencia.php" style="color: indigo; font-weight: 500;">Frequência Escolar</a></li>
                <li><a href="matdit/mat_prof.php" style="color: indigo; font-weight: 500;">Atividades</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="../notas/form-add-nota.php">Lançar Notas</a></li>
                <li><a href="frequencia/frequencia.php">Frequência Escolar</a></li>
                <li><a href="matdit/mat_prof.php">Atividades</a></li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a href="#">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Gerenciamento<i
                            class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="logout.php" class="waves-effect waves-light btn indigo hoverable"><?php echo $_SESSION['user_nome_prof']; ?><i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="#">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Gerenciamento</a></li>
                <li><a href="logout.php" class="waves-effect waves-light btn indigo"><?php echo $_SESSION['user_nome_prof']; ?></a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
   
    <h1 class="center indigo-text">Início</h1>
    

    <div class="row">
    <div class="col s12 m4 ">
      <div class="card grey darken-2 hoverable">
        <div class="card-content yellow indigo-text">
          <span class="card-title" style="font-weight:500;">Melhore seu material</span>
          <p style="font-weight:500;">Melhore seu material da maneira que você achar melho, pesquise por aqui.</p>
        </div>
        <div class="card-action grey-text">
          <a class="yellow-text " href="#">Clique aqui para pesquisar</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="col s12 m4">
      <div class="card grey darken-2 hoverable">
        <div class="card-content yellow-text">
          <span class="card-title" style="font-weight:500;">Biblioteca Digital</span>
          <p style="font-weight:500;"></p>
        </div>
        <div class="card-action yellow">
          <a class="indigo-text " href="http://cvc.instituto-camoes.pt/conhecer/biblioteca-digital-camoes.HTML">Acesse aqui!</a>
        </div>
      </div>
    </div>
  </div> 

            
  

        <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>
    <script src="../js/init2.js"></script>
    

   

    </body>

</html>