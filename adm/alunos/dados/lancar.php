<?php

require '../init.php';

 

// pega o ID da URL

$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

 

// valida o ID

if (empty($id))

{

    echo "ID para alteração não definido";

    exit;

}

 

// busca os dados du usuário a ser editado

$PDO = db_connect();

$sql = "SELECT * FROM aluno WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);

 

$stmt->execute();




 

$user = $stmt->fetch(PDO::FETCH_ASSOC);



$_SESSION['user_nome'] = $user['nome'];
 

// se o método fetch() não retornar um array, significa que o ID não corresponde a um usuário válido

if (!is_array($user))

{

    echo "Nenhum usuário encontrado";

    exit;

}

?>

<!doctype html>

<html lang="pt/br">

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title><?php echo $_SESSION['user_nome']; ?> - Colégio Estrela</title>

    <!-- FAVICON-->
    <link rel="shortcut icon" href="../../images/logo-removebg-preview.png" type="image/x-icon">

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
            src="../../../images/logo.png" style="width:90px; height:60px;" alt="Logo" /></a>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="../boletim.php" style="color: indigo; font-weight: 500;">Lançar Notas</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Frequência Escolar</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Atividades</a></li>
                <li><a href="agenda/agenda.php" style="color: indigo; font-weight: 500;">Agenda</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="../boletim.php">Lançar Notas</a></li>
                <li><a href="#">Frequência Escolar</a></li>
                <li><a href="#">Atividades</a></li>
                <li><a href="agenda/agenda.php">Agenda</a></li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a href="#">Início</a></li>
                <li><a href="adicionar/add_aluno.php">Matrícula</a></li>
                <li><a onclick="M.toast({html: 'Em Breve!'})">Financeiro</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="../logout_adm.php" class="waves-effect waves-light btn indigo hoverable ">Sair<i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="#">Início</a></li>
                <li><a href="adicionar/add_aluno.php">Matrícula</a></li>
                <li><a onclick=" M.toast({html: 'Em Breve!', classes: 'rounded'});">Financeiro</a></li>
                <li><a href="../logout_adm.php" class="waves-effect waves-light btn indigo">SAIR</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
       
 

            <h2 class="indigo-text center">Editar Dados do Aluno - <?php echo $_SESSION['user_nome']; ?></h3>

               
        <!-- Ciências -->
            <fieldset>
                <form action="edit_aluno.php" method="post">

                    <label for="matricula">Matrícula: </label><input type="text" name="matricula" id="matricula" value="<?php echo $user['matricula'] ?>">
                    <br><br>
                    <label for="nome">Nome: </label><input type="text" name="nome" id="nome" value="<?php echo $user['nome'] ?>">
                    <br><br>
                    <label for="nascimento">Data de Nascimento: </label><input type="text" name="nascimento" id="nascimento" value="<?php echo $user['nascimento'] ?>">
                    <br><br>
                    <label for="rg">RG:</label><input type="text" name="rg" id="rg" value="<?php echo $user['rg'] ?>">
                    <br><br>
                    <label for="cpf">CPF: </label><input type="text" name="cpf" id="cpf" value="<?php echo $user['cpf'] ?>">
                    <br><br>
                    <label for="endereco">Endereço: </label><input type="text" name="endereco" id="endereco" value="<?php echo $user['endereco'] ?>">
                    <br><br>
                    <label for="num_casa">Nº: </label><input type="text" name="num_casa" id="num_casa" value="<?php echo $user['num_casa'] ?>">
                    <br><br>
                    <label for="bairro">Bairro:</label><input type="text" name="bairro" id="bairro" value="<?php echo $user['bairro'] ?>">
                    <br><br>
                    <label for="cidade">Cidade: </label><input type="text" name="cidade" id="cidade" value="<?php echo $user['cidade'] ?>">
                    <br><br>
                    <label for="telefone">Telefone: </label><input type="text" name="telefone" id="telefone" value="<?php echo $user['telefone'] ?>">
                    <br><br>
                    <label for="serie">Série: </label><input type="text" name="serie" id="serie" value="<?php echo $user['serie'] ?>">
                    <br><br>
                    <label for="senha">Senha:</label><input type="text" name="senha" id="senha" value="<?php echo $user['senha'] ?>">
                    <br><br>
                    <label for="email">Email: </label><input type="text" name="email" id="email" value="<?php echo $user['email'] ?>">
                    <br><br>                    
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button  class="waves-effect waves-light btn" type="submit"> <i class="material-icons left" >save</i>Salvar</button>
                    <a  class="waves-effect waves-light btn indigo" href="../panel_alunos_adm.php">Voltar</a>
                </form>
            </fieldset>

            <br>
            
          


         
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../../js/materialize.js"></script>
    <script src="../../js/init.js"></script>
    <script src="../../js/init2.js"></script>
        

    </body>

</html>