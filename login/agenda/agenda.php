<?php
session_start();
 
require_once '../init.php';
 
require '../check.php';


$PDO = db_connect();
 
// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php
// SQL para selecionar os registros
$id = $_SESSION['user_id'];

$sql = "SELECT id,nome FROM aluno where id = $id ";

// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();


?>

<!doctype html>

<html>

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Agenda Escolar - Colégio Estrela</title>

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
                <li><a href="boletim.php" style="color: indigo; font-weight: 500;">Boletim</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Frequência Escolar</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Atividades</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Agenda</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="boletim.php">Boletim</a></li>
                <li><a href="#">Frequência Escolar</a></li>
                <li><a href="#">Atividades</a></li>
                <li><a href="#">Agenda</a></li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a href="../panel.php">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Acadêmico<i
                            class="material-icons right">arrow_drop_down</i></a></li>
                <li><a onclick="M.toast({html: 'Em Breve!'})">Pagamento</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="logout.php" class="waves-effect waves-light btn indigo hoverable"><?php echo $_SESSION['user_name']; ?><i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="../panel.php">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Acadêmico</a></li>
                <li><a onclick=" M.toast({html: 'Em Breve!', classes: 'rounded'});">Pagamento</a></li>
                <li><a href="logout.php" class="waves-effect waves-light btn indigo"><?php echo $_SESSION['user_name']; ?></a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
   
    <h1 class="center indigo-text ">Agenda Escolar</h1>
    
    
        
      
            
  

        <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../../js/materialize.js"></script>
    <script src="../../js/init.js"></script>
    <script src="../../js/init2.js"></script>
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