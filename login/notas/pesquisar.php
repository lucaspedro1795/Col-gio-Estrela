<?php
 // Conectando ao banco de dados:
 include_once("conectar.php");
 
 // Recebendo os dados a pesquisar
 $pesquisa = $_POST['serie'];
?>

 <html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title><?php echo $pesquisa ?> - Colégio Estrela</title>

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
                <li><a href="../form-add-nota.php" style="color: indigo; font-weight: 500;">Lançar Notas</a></li>
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
   
    <h1 class="center indigo-text"><?php echo $pesquisa ?> - Lançar Notas</h1>


 <!-- Criando tabela e cabeçalho de dados: -->
 <table border="1" style='width:90%; margin:0 auto'>
 <tr>
<th>Nome</th>
<th>Matrícula</th>
<th>Ano</th>
<th>Ações</th>
 </tr>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT * FROM aluno WHERE serie = '$pesquisa'";
 $resultado = mysqli_query($strcon,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $nome = $registro['nome'];
   $sobrenome = $registro['matricula'];
   $sexo = $registro['serie'];
   $user = $registro['id'];
   echo "<tr>";
   echo "<td>".$nome."</td>";
   echo "<td>".$sobrenome."</td>";
   echo "<td>".$sexo."</td>";
   echo "<td><a class='waves-effect waves-light btn indigo'  href=lancar.php?id=$user'>Lançar</a></td>";
   echo "</tr>";
 }
 mysqli_close($strcon);
 echo "</table>";

?>
<a href="form-add-nota.php" class="waves-effect waves-light btn indigo right" style="margin: 50px;"><i class="material-icons left">arrow_back</i>Voltar</a>
</body>
</html>