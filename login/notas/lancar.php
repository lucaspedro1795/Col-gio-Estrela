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

$sql = "SELECT nome, matricula, senha, serie, pb_c, sb_c, tb_c, qb_c, pb_gr, sb_gr, tb_gr, qb_gr, pb_m, sb_m, tb_m, qb_m, pb_h, sb_h, tb_h, qb_h, pb_geo, sb_geo, tb_geo, qb_geo, pb_a, sb_a, tb_a, qb_a, pb_pt, sb_pt, tb_pt, qb_pt, pb_i, sb_i, tb_i, qb_i FROM aluno WHERE id = :id";

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
    <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
   
    </head>
    <body>
    <nav class="indigo darken-34" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="center brand-logo"><img class="logo"
            src="../../images/logo.png" style="width:90px; height:60px;" alt="Logo" /></a>
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
                <li><a href="../panel_prof.php">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Gerenciamento<i
                            class="material-icons right">arrow_drop_down</i></a></li>
                <li><a onclick="M.toast({html: 'Em Breve!'})">Acessar o GSuite</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="../logout_prof.php" class="waves-effect waves-light btn indigo hoverable">Sair<i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="../panel_prof.php">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Gerenciamento</a></li>
                <li><a onclick=" M.toast({html: 'Em Breve!', classes: 'rounded'});">Acessar o GSuite</a></li>
                <li><a href="../logout_prof.php" class="waves-effect waves-light btn indigo">Sair</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
       
 

            <h2 class="indigo-text center">Editar Notas do Aluno - <?php echo $_SESSION['user_nome']; ?></h3>

               
        <!-- Ciências -->
            <fieldset>
                <h5 class="indigo-text left">Ciências</h5>
                <br><br><br>
                <form action="lançar/edit_cien.php" method="post">

                    <label for="pb_c">1º Semestre: </label><input type="text" name="pb_c" id="pb_c" value="<?php echo $user['pb_c'] ?>">
                    <br><br>
                    <label for="sb_c">2º Semestre: </label><input type="text" name="sb_c" id="sb_c" value="<?php echo $user['sb_c'] ?>">
                    <br><br>
                    <label for="tb_c">3º Semestre: </label><input type="text" name="tb_c" id="tb_c" value="<?php echo $user['tb_c'] ?>">
                    <br><br>
                    <label for="qb_c">4º Semestre:</label><input type="text" name="qb_c" id="qb_c" value="<?php echo $user['qb_c'] ?>">
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button  class="waves-effect waves-light btn" type="submit"> <i class="material-icons left" >save</i>Salvar</button>
                </form>
            </fieldset>

            <br><br>

            <!-- Gramática -->

            <fieldset>
                <h5 class="indigo-text left">Gramática</h5>
                <br><br><br>
                <form action="lançar/edit_gram.php" method="post">

                <label for="pb_gr">1º Semestre: </label><input type="text" name="pb_gr" id="pb_gr" value="<?php echo $user['pb_gr'] ?>">
                    <br><br>
                    <label for="sb_gr">2º Semestre: </label><input type="text" name="sb_gr" id="sb_gr" value="<?php echo $user['sb_gr'] ?>">
                    <br><br>
                    <label for="tb_gr">3º Semestre: </label><input type="text" name="tb_gr" id="tb_gr" value="<?php echo $user['tb_gr'] ?>">
                    <br><br>
                    <label for="qb_gr">4º Semestre:</label><input type="text" name="qb_gr" id="qb_gr" value="<?php echo $user['qb_gr'] ?>">
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button  class="waves-effect waves-light btn" type="submit"> <i class="material-icons left">save</i>Salvar</button>
                </form>
            </fieldset>

            <br><br>

            <!-- Matemática -->

            <fieldset>
                <h5 class="indigo-text left">Matemática</h5>
                <br><br><br>
                <form action="lançar/edit_mat.php" method="post">

                <label for="pb_m">1º Semestre: </label><input type="text" name="pb_m" id="pb_m" value="<?php echo $user['pb_m'] ?>">
                    <br><br>
                    <label for="sb_m">2º Semestre: </label><input type="text" name="sb_m" id="sb_m" value="<?php echo $user['sb_m'] ?>">
                    <br><br>
                    <label for="tb_m">3º Semestre: </label><input type="text" name="tb_m" id="tb_m" value="<?php echo $user['tb_m'] ?>">
                    <br><br>
                    <label for="qb_m">4º Semestre:</label><input type="text" name="qb_m" id="qb_m" value="<?php echo $user['qb_m'] ?>">
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button  class="waves-effect waves-light btn" type="submit"> <i class="material-icons left">save</i>Salvar</button>
                </form>
            </fieldset>

            <br><br>

            <!-- História -->

            <fieldset>
                <h5 class="indigo-text left">História</h5>
                <br><br><br>
                <form action="lançar/edit_hist.php" method="post">

                <label for="pb_h">1º Semestre: </label><input type="text" name="pb_h" id="pb_h" value="<?php echo $user['pb_h'] ?>">
                    <br><br>
                    <label for="sb_h">2º Semestre: </label><input type="text" name="sb_h" id="sb_h" value="<?php echo $user['sb_h'] ?>">
                    <br><br>
                    <label for="tb_h">3º Semestre: </label><input type="text" name="tb_h" id="tb_h" value="<?php echo $user['tb_h'] ?>">
                    <br><br>
                    <label for="qb_h">4º Semestre:</label><input type="text" name="qb_h" id="qb_h" value="<?php echo $user['qb_h'] ?>">
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button  class="waves-effect waves-light btn" type="submit"> <i class="material-icons left" >save</i>Salvar</button>
                </form>
            </fieldset>

            <br><br>

            <!-- Geografia -->

            <fieldset>
                <h5 class="indigo-text left">Geografia</h5>
                <br><br><br>
                <form action="lançar/edit_geo.php" method="post">

                <label for="pb_geo">1º Semestre: </label><input type="text" name="pb_geo" id="pb_geo" value="<?php echo $user['pb_geo'] ?>">
                    <br><br>
                    <label for="sb_geo">2º Semestre: </label><input type="text" name="sb_geo" id="sb_geo" value="<?php echo $user['sb_geo'] ?>">
                    <br><br>
                    <label for="tb_geo">3º Semestre: </label><input type="text" name="tb_geo" id="tb_geo" value="<?php echo $user['tb_geo'] ?>">
                    <br><br>
                    <label for="qb_geo">4º Semestre:</label><input type="text" name="qb_geo" id="qb_geo" value="<?php echo $user['qb_geo'] ?>">
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button  class="waves-effect waves-light btn" type="submit"> <i class="material-icons left">save</i>Salvar</button>
                </form>
            </fieldset>

            <br><br>

            <!-- Artes -->

            <fieldset>
                <h5 class="indigo-text left">Artes</h5>
                <br><br><br>
                <form action="lançar/edit_artes.php" method="post">

                <label for="pb_a">1º Semestre: </label><input type="text" name="pb_a" id="pb_a" value="<?php echo $user['pb_a'] ?>">
                    <br><br>
                    <label for="sb_a">2º Semestre: </label><input type="text" name="sb_a" id="sb_a" value="<?php echo $user['sb_a'] ?>">
                    <br><br>
                    <label for="tb_a">3º Semestre: </label><input type="text" name="tb_a" id="tb_a" value="<?php echo $user['tb_a'] ?>">
                    <br><br>
                    <label for="qb_a">4º Semestre:</label><input type="text" name="qb_a" id="qb_a" value="<?php echo $user['qb_a'] ?>">
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button  class="waves-effect waves-light btn" type="submit"> <i class="material-icons left">save</i>Salvar</button>
                </form>
            </fieldset>

            <br><br>

            <!-- Produção Textual -->

            <fieldset>
                <h5 class="indigo-text left">Produção Textual</h5>
                <br><br><br>
                <form action="lançar/edit_pt.php" method="post">

                <label for="pb_pt">1º Semestre: </label><input type="text" name="pb_pt" id="pb_pt" value="<?php echo $user['pb_pt'] ?>">
                    <br><br>
                    <label for="sb_pt">2º Semestre: </label><input type="text" name="sb_pt" id="sb_pt" value="<?php echo $user['sb_pt'] ?>">
                    <br><br>
                    <label for="tb_pt">3º Semestre: </label><input type="text" name="tb_pt" id="tb_pt" value="<?php echo $user['tb_pt'] ?>">
                    <br><br>
                    <label for="qb_pt">4º Semestre:</label><input type="text" name="qb_pt" id="qb_pt" value="<?php echo $user['qb_pt'] ?>">
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button  class="waves-effect waves-light btn" type="submit"> <i class="material-icons left">save</i>Salvar</button>
                </form>
            </fieldset>

            <br><br>

            <!-- Inglês -->

            <fieldset>
                <h5 class="indigo-text left">Inglês</h5>
                <br><br><br>
                <form action="lançar/edit_ingles.php" method="post">

                <label for="pb_i">1º Semestre: </label><input type="text" name="pb_i" id="pb_i" value="<?php echo $user['pb_i'] ?>">
                    <br><br>
                    <label for="sb_i">2º Semestre: </label><input type="text" name="sb_i" id="sb_i" value="<?php echo $user['sb_i'] ?>">
                    <br><br>
                    <label for="tb_i">3º Semestre: </label><input type="text" name="tb_i" id="tb_i" value="<?php echo $user['tb_i'] ?>">
                    <br><br>
                    <label for="qb_i">4º Semestre:</label><input type="text" name="qb_i" id="qb_i" value="<?php echo $user['qb_i'] ?>">
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <button  class="waves-effect waves-light btn" type="submit"> <i class="material-icons left">save</i>Salvar</button>
                </form>
            </fieldset>
            

            
            
            <a  class="waves-effect waves-light btn right indigo" style="margin:50px; " href="../panel_prof.php">Voltar</a>


         
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../../js/materialize.js"></script>
    <script src="../../js/init.js"></script>
    <script src="../../js/init2.js"></script>
        

    </body>

</html>