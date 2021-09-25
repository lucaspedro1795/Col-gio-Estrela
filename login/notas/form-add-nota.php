<?php
require_once '../init.php';


 
// abre a conexão
$PDO = db_connect();

// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php

 
$sql_count = "SELECT COUNT(*) AS total FROM aluno ORDER BY nome ASC";
 
// SQL para selecionar os registros
$sql = "SELECT id, nome, matricula, senha, serie FROM aluno ORDER BY nome ASC ";
 
// conta o toal de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();
 
// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();





?>



<!doctype html>

<html>

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Lançar Notas - Colégio Estrela</title>

    <!-- FAVICON-->
    <link rel="shortcut icon" href="../images/icons/logo.png" type="image/x-icon">

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
                <li><a href="#" style="color: indigo; font-weight: 500;">Lançar Notas</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Frequência Escolar</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Atividades</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Agenda</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="#">Lançar Notas</a></li>
                <li><a href="#">Frequência Escolar</a></li>
                <li><a href="#">Atividades</a></li>
                <li><a href="#">Agenda</a></li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a href="../panel_prof.php">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Gerenciamento<i
                            class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="https://accounts.google.com/ServiceLogin/identifier?hl=pt-BR&passive=true&continue=https%3A%2F%2Fwww.google.com%2F%3Fgws_rd%3Dssl&ec=GAZAAQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Acesso ao GSuite</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="../logout_prof.php" class="waves-effect waves-light btn indigo hoverable">Sair<i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="../panel_prof.php">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Gerenciamento</a></li>
                <li><a href="https://accounts.google.com/ServiceLogin/identifier?hl=pt-BR&passive=true&continue=https%3A%2F%2Fwww.google.com%2F%3Fgws_rd%3Dssl&ec=GAZAAQ&flowName=GlifWebSignIn&flowEntry=ServiceLogin">Acesso ao GSuite</a></li>
                <li><a href="../logout_prof.php" class="waves-effect waves-light btn indigo">Sair</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
   
    <h1 class="center indigo-text">Lançar Notas</h1>
    
    <div class="result" style="height: max-content; overflow: visible; position: relative; color: indigo; margin: 50px;  widht: 70%;"" >

            <form name="Cadastro" action="pesquisar2.php" method="POST">
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
    <script src="../../js/materialize.js"></script>
    <script src="../../js/init.js"></script>
    <script src="../../js/init2.js"></script>
    <script src="option.js"></script>
    <script>
    $('#filtro-nome').keyup(function() {
    var nomeFiltro = $(this).val().toLowerCase();
    console.log(nomeFiltro);
    $('table tbody').find('tr').each(function() {
        var conteudoCelula = $(this).find('td:first').text();
        console.log(conteudoCelula);
        var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
        $(this).css('display', corresponde ? '' : 'none');
    });
});
    </script>
   

    </body>

</html>