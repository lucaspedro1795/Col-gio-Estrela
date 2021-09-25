<?php

require 'init_matdit.php';
session_start();

?>

<!doctype html>

<html lang="pt/br">

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Atividades - Colégio Estrela</title>

    <!-- FAVICON-->
    <link rel="shortcut icon" href="../../images/logo-removebg-preview.png" type="image/x-icon">

    <!-- CSS  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
   
    </head>
    <body>
    <nav class="indigo darken-34" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="center brand-logo"><img class="logo"
            src="../../images/logo.png" style="width:90px; height:60px;" alt="Logo" /></a>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="../panel_prof.php" style="color: indigo; font-weight: 500;">Lançar Notas</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Frequência Escolar</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Atividades</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="../panel_prof.php">Lançar Notas</a></li>
                <li><a href="#">Frequência Escolar</a></li>
                <li><a href="#">Atividades</a></li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a href="../panel_prof.php">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Gerenciamento<i
                            class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="../logout_prof.php" class="waves-effect waves-light btn indigo hoverable">Sair<i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="../panel_prof.php">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Gerenciamento</a></li>
                <li><a href="../logout_prof.php" class="waves-effect waves-light btn indigo">Sair</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
       
 

            <h2 class="indigo-text center">Atividades</h3>

               
        <!-- Lançar Atividade -->
            <iframe width="100%" height="100%" src="test/index.php" frameborder="0"></iframe>
    
            <a  class="waves-effect waves-light btn right indigo" style="margin-top:10px; " href="../panel_prof.php">Voltar</a>


         
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../../js/materialize.js"></script>
    <script src="../../js/init.js"></script>
    <script src="../../js/init2.js"></script>
        

    </body>

</html>