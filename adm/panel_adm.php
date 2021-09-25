<?php

session_start();

 

require_once 'init_adm.php';

 

require 'check_adm.php';

?>

<!doctype html>

<html>

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Área Restrita - Colégio Estrela</title>

    <!-- FAVICON-->
    <link rel="shortcut icon" href="../images/logo-removebg-preview.png" type="image/x-icon">

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
                <li><a href="boletim.php" style="color: indigo; font-weight: 500;">Boletim</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Frequência Escolar</a></li>
                <li><a href="https://accounts.google.com/ServiceLogin/identifier?service=classroom&passive=1209600&continue=https%3A%2F%2Fclassroom.google.com%2F&followup=https%3A%2F%2Fclassroom.google.com%2F&emr=1&flowName=GlifWebSignIn&flowEntry=AddSession" style="color: indigo; font-weight: 500;">Classroom</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Material Didático</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="boletim.php">Boletim</a></li>
                <li><a href="#">Frequência Escolar</a></li>
                <li><a href="https://accounts.google.com/ServiceLogin/identifier?service=classroom&passive=1209600&continue=https%3A%2F%2Fclassroom.google.com%2F&followup=https%3A%2F%2Fclassroom.google.com%2F&emr=1&flowName=GlifWebSignIn&flowEntry=AddSession">Classroom</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Material Didático</a></li>
            </ul>

            

            <ul class="right hide-on-med-and-down">
                <li><a href="logout_adm.php">Sair</a></li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a  class="waves-effect waves-light btn indigo hoverable "><?php echo $_SESSION['user_nome']; ?> | <?php echo $_SESSION['user_funcao']; ?> <i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a  class="waves-effect waves-light btn indigo"><?php echo $_SESSION['user_nome']; ?> | <?php echo $_SESSION['user_funcao']; ?> </a></li>
                <li><a href="logout_adm.php">Sair</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
   
    <h1 class="center indigo-text">Selecione uma das opções abaixo:</h1>
    
    
    <div class="row">
    <a class="black-text" href="alunos/panel_alunos_adm.php">
    <div class="col s12 m5">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://www.estudokids.com.br/wp-content/uploads/2017/07/sou-aluno-infantil-por-que-nao-devo-apontar-o-lapis-com-estilete.jpg">
        </div>
        <div class="card-content">
          <p style='font-weight: 500; font-size: 24px;'>Alunos</p>
        </div>
       
      </div>
    </div>
    </a>

    <a class="black-text" href="professores/panel_prof_adm.php">
    <div class="col s12 m5 right">
      <div class="card hoverable">
        <div class="card-image">
          <img src="https://www.worldatlas.com/r/w1200-h630-c1200x630/upload/da/f0/cf/female-professor.jpg">
        </div>
        <div class="card-content">
          <p style='font-weight: 500; font-size: 24px;'>Professores</p>
        </div>
        
      </div>
    </div>
    </a>

  </div>

  
  

  
 

        <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>
    <script src="../js/init2.js"></script>
    

   

    </body>

</html>