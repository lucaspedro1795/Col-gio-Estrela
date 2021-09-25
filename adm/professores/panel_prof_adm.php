<!DOCTYPE html>
<?php
require_once 'init_prof.php';

 
// abre a conexão
$PDO = db_connect();
 
// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php

$sql_count = "SELECT COUNT(*) AS total FROM professor ORDER BY nome ASC";
 
// SQL para selecionar os registros
$sql = "SELECT * FROM professor ORDER BY nome ASC";
 
// conta o toal de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();
 
// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();

?>




<html>
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Professores - Colégio Estrela</title>

    <!-- FAVICON-->
    <link rel="shortcut icon" href="../images/logo-removebg-preview.png" type="image/x-icon">

    <!-- CSS  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />

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
                <li><a href="../panel_adm.php">Início</a></li>
                <li><a href="adicionar/add_prof.php">Adesão</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="../logout_adm.php" class="waves-effect waves-light btn indigo hoverable">Sair<i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="../panel_adm.php">Início</a></li>
                <li><a href="adicionar/add_prof.php">Adesão</a></li>
                <li><a href="../logout_adm.php" class="waves-effect waves-light btn indigo">Sair</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
   
    <h1 class="center indigo-text">Professores - Cadastrados</h1>
        
        <div class="result" style=" width: 80%; margin: 0 auto;" >

            
 
        <?php if ($total > 0): ?>
 
        <table class="centered responsive-table" width="50%"  border="2">
            <thead>
                <tr>
                    <th>Nome</th>
                    <!--<th>Disciplina</th>-->
                    <th>CPF</th>
                    <th>Senha</th>
                    <th>Telefone</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $user['nome'] ?></td>
                    <!--<td><?php echo $user['disciplina'] ?></td>-->
                    <td><?php echo $user['cpf'] ?></td>
                    <td><?php echo $user['senha'] ?></td>
                    <td><?php echo $user['telefone'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td>
                        <a class='waves-effect waves-light btn indigo' title="Editar" href="dados/lancar.php?id=<?php echo $user['id'] ?>"><i
                            class="material-icons white-text">edit</i></a>
                        <a class='waves-effect waves-light btn indigo' title="Excluir" href="dados/delete.php?id=<?php echo $user['id'] ?>"><i
                            class="material-icons white-text">delete</i></a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
 
        <?php else: ?>
 
        <p>Nenhum usuário registrado</p>
 
        <?php endif; ?>
            
            
        </div>
    </body>
</html>