<?php

session_start();

 

require_once 'init.php';

?>

<!doctype html>

<html>

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Alunos.ADM - Colégio Estrela</title>

    <!-- FAVICON-->
    <link rel="shortcut icon" href="../images/logo-removebg-preview.png" type="image/x-icon">

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
                <li><a href="boletim.php" style="color: indigo; font-weight: 500;">Adicionar</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Editar</a></li>
                <li><a href="https://accounts.google.com/ServiceLogin/identifier?service=classroom&passive=1209600&continue=https%3A%2F%2Fclassroom.google.com%2F&followup=https%3A%2F%2Fclassroom.google.com%2F&emr=1&flowName=GlifWebSignIn&flowEntry=AddSession" style="color: indigo; font-weight: 500;">Classroom</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Material Didático</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="boletim.php">Boletim</a></li>
                <li><a href="#">Frequência Escolar</a></li>
                <li><a href="https://accounts.google.com/ServiceLogin/identifier?service=classroom&passive=1209600&continue=https%3A%2F%2Fclassroom.google.com%2F&followup=https%3A%2F%2Fclassroom.google.com%2F&emr=1&flowName=GlifWebSignIn&flowEntry=AddSession">Classroom</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Material Didático</a></li>
            </ul>

            

            <ul class="left hide-on-med-and-down">
                <li><a href="../panel_adm.php">Início</a></li>
                <li><a href="adicionar/add_aluno.php">Matrícula</a></li>
                <li><a onclick="M.toast({html: 'Em Breve!'})">Financeiro</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="../logout_adm.php" class="waves-effect waves-light btn indigo hoverable "><?php echo $_SESSION['user_nome'];?> | <?php echo $_SESSION['user_funcao'];?><i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="../panel_adm.php">Início</a></li>
                <li><a href="adicionar/add_aluno.php">Matrícula</a></li>
                <li><a onclick=" M.toast({html: 'Em Breve!', classes: 'rounded'});">Financeiro</a></li>
                <li><a href="../logout_adm.php" class="waves-effect waves-light btn indigo"><?php echo $_SESSION['user_nome']; ?> | <?php echo $_SESSION['user_funcao'];?></a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
   
    <h1 class="center indigo-text">Início</h1>

    <div class="result" style="height: max-content; overflow: visible; position: relative; color: indigo; margin: 50px;  widht: 70%;"" >
    <form name="Cadastro" action="dados/pesquisar2.php" method="POST">
                <label style="color: indigo; font-weight: 500; font-size: 14px;">Selecione a Sala:</label>
                    <select name="serie">
                    <option value="1º Ano A">1º Ano A</option>
                    <option value="1º Ano B">1º Ano B</option>
                    <option value="2º Ano A">2º Ano A</option>
                    <option value="2º Ano B">2º Ano B</option>
                    <option value="3º Ano A">3º Ano A</option>
                    <option value="3º Ano B">3º Ano B</option>
                    <option value="4º Ano A">4º Ano A</option>
                    <option value="4º Ano B">4º Ano B</option>
                    <option value="5º Ano A">5º Ano A</option>
                    <option value="5º Ano B">5º Ano B</option>
                    <option value="6º Ano A">6º Ano A</option>
                    <option value="6º Ano B">6º Ano B</option>
                    <option value="7º Ano A">7º Ano A</option>
                    <option value="7º Ano B">7º Ano B</option>
                    <option value="8º Ano A">8º Ano A</option>
                    <option value="8º Ano B">8º Ano B</option>
                    <option value="9º Ano A">9º Ano A</option>
                    <option value="9º Ano B">9º Ano B</option>
                    </select><br>
                    <button class="btn waves-effect waves-light indigo" type="submit" name="enviar">Buscar
                        <i class="material-icons right">search</i>
                    </button>
        
            </form>

</div>
    

  
 

        <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
    <script src="js/init2.js"></script>
    <script src="option.js"></script>
    

   

    </body>

</html>