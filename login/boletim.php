<?php
session_start();
 
require_once 'init.php';
 
require 'check.php';


$PDO = db_connect();
 
// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php
// SQL para selecionar os registros
$id = $_SESSION['user_id'];

$sql = "SELECT id,nome, pb_c, sb_c, tb_c, qb_c, pb_gr, sb_gr, tb_gr, qb_gr, pb_m, sb_m, tb_m, qb_m, pb_h, sb_h, tb_h, qb_h, pb_geo, sb_geo, tb_geo, qb_geo, pb_a, sb_a, tb_a, qb_a, pb_pt, sb_pt, tb_pt, qb_pt, pb_i, sb_i, tb_i, qb_i  FROM aluno where id = $id ";


// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();


?>

<!doctype html>

<html>

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Boletim - Colégio Estrela</title>

    <!-- FAVICON-->
    <link rel="shortcut icon" href="../images/logo-removebg-preview.png" type="image/x-icon">

    <!-- CSS  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-4ZPLezkTZTsojWFhpdFembdzFudphhoOzIunR1wH6g1WQDzCAiPvDyitaK67mp0+" crossorigin="anonymous">
    
      

    </head>

 

    <body>


    <nav class="indigo darken-34" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="center brand-logo"><img class="logo"
            src="../images/logo.png" style="width:90px; height:60px;" alt="Logo" /></a>
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
                <li><a href="panel.php">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Acadêmico<i
                            class="material-icons right">arrow_drop_down</i></a></li>
                <li><a onclick="M.toast({html: 'Em Breve!'})">Pagamento</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="logout.php" class="waves-effect waves-light btn indigo hoverable"><?php echo $_SESSION['user_name']; ?><i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="panel.php">Início</a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Acadêmico</a></li>
                <li><a onclick=" M.toast({html: 'Em Breve!', classes: 'rounded'});">Pagamento</a></li>
                <li><a href="logout.php" class="waves-effect waves-light btn indigo"><?php echo $_SESSION['user_name']; ?></a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
   
    <h1 class="center indigo-text ">Boletim Escolar</h1>

    <!-- Modal Structure -->
    <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <h4>ATENÇÃO</h4>
                                        <p>Caso você não esteja conseguindo visualizar alguma nota, não entre em pânico, pois isso já é uma função do sistema, por sua nota não ter sido lançada.</p>
                                        <p>Caso você não esteja conseguindo visualizar alguma nota e já forma lançadas notas anteriores, entre me contato para mais informações.</p>
                                    </div>
                                <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                                </div>
                            </div>
    
    <table class="responsive-table" border="1" style="width: 70%; height:50%; margin: 0 auto;">
                    <thead>
                        <tr class="indigo white-text ">
                            <th rowspan="2" colspan="2">DISCIPLINAS</th>
                            <th colspan="7">
                            <a class="waves-effect waves-light btn red left small modal-trigger" style="margin-right: 20px;" href="#modal1"><i class="material-icons left">warning</i>OBS</a>
                            </th>
                        </tr>
                        <tr >
                            <th valign="middle">1º</th>
                            <th  class="indigo white-text "valign="middle">2º</th>
                            <th valign="middle">3º</th>
                            <th  class="indigo white-text "valign="middle">4º</th>
                            <th class="indigo white-text ">RECUP.</th>
                            <th>MÉDIA FINAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                        <tr>
                            <td nowrap="nowrap" colspan="2">CIÊNCIAS</td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['pb_c'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['sb_c'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['tb_c'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['qb_c'] ?></h5></td>
                            
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text">-</h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php
                             $soma =  (float) $user['pb_c']+$user['sb_c']+$user['tb_c']+$user['qb_c'];
                             $resul = $soma/4;
                             echo $resul;
                              ?>
                             </h5></td>
                            
                        </tr>
                        
                        <tr class="indigo white-text ">
                            <td nowrap="nowrap" colspan="2">GRAMÁTICA</td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['pb_gr'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['sb_gr'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['tb_gr'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['qb_gr'] ?></h5></td>
                            
                            <td nowrap="nowrap" align="center"><h5>-</h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php
                             $soma =  (float) $user['pb_gr']+$user['sb_gr']+$user['tb_gr']+$user['qb_gr'];
                             $resul = $soma/4;
                             echo $resul;
                              ?>
                              </h5></td>
                        </tr>
                        <tr>
                            <td nowrap="nowrap" colspan="2">MATEMÁTICA</td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['pb_m'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['sb_m'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['tb_m'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['qb_m'] ?></h5></td>
                            
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text">-</h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php
                             $soma =  (float) $user['pb_m']+$user['sb_m']+$user['tb_m']+$user['qb_m'];
                             $resul = $soma/4;
                             echo $resul;
                              ?>
                              </h5></td>
                        </tr>
                        <tr  class="indigo white-text ">
                            <td nowrap="nowrap" colspan="2">HISTÓRIA</td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['pb_h'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['sb_h'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['tb_h'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['qb_h'] ?></h5></td>
                      
                            <td nowrap="nowrap" align="center"><h5>-</h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php
                             $soma =  (float) $user['pb_h']+$user['sb_h']+$user['tb_h']+$user['qb_h'];
                             $resul = $soma/4;
                             echo $resul;
                              ?>
                            </h5></td>
                        </tr> 
                        <tr>
                            <td class="tudo" nowrap="nowrap" colspan="2">GEOGRAFIA</td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['pb_geo'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['sb_geo'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['tb_geo'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['qb_geo'] ?></h5></td>
                            
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text">-</h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php
                             $soma =  (float) $user['pb_geo']+$user['sb_geo']+$user['tb_geo']+$user['qb_geo'];
                             $resul = $soma/4;
                             echo $resul;
                              ?>
                            </h5></td>
                        </tr>
                        <tr  class="indigo white-text ">
                            <td class="df tudo" nowrap="nowrap" colspan="2">ARTES</td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['pb_a'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['sb_a'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['tb_a'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['qb_a'] ?></h5></td>
                            
                            <td nowrap="nowrap" align="center"><h5>-</h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php
                             $soma =  (float) $user['pb_a']+$user['sb_a']+$user['tb_a']+$user['qb_a'];
                             $resul = $soma/4;
                             echo $resul;
                              ?>
                            </h5></td>
                        </tr>
                        <tr>
                            <td class="tudo" nowrap="nowrap" colspan="2">PRODUÇÃO TEXTUAL</td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['pb_pt'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['sb_pt'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['tb_pt'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php echo $user['qb_pt'] ?></h5></td>
                            
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text">-</h5></td>
                            <td nowrap="nowrap" align="center"><h5 class="indigo-text"><?php
                             $soma =  (float) $user['pb_pt']+$user['sb_pt']+$user['tb_pt']+$user['qb_pt'];
                             $resul = $soma/4;
                             echo $resul;
                              ?>
                            </h5></td>
                        </tr>
                        <tr class="indigo white-text ">
                            <td class="df tudo" nowrap="nowrap" colspan="2">INGLÊS</td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['pb_i'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['sb_i'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['tb_i'] ?></h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php echo $user['qb_i'] ?></h5></td>
                            
                            <td nowrap="nowrap" align="center"><h5>-</h5></td>
                            <td nowrap="nowrap" align="center"><h5><?php
                             $soma =  (float) $user['pb_i']+$user['sb_i']+$user['tb_i']+$user['qb_i'];
                             $resul = $soma/4;
                             echo $resul;
                              ?>
                            </h5></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
    
        
                
            
  

        <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>
    <script src="../js/init2.js"></script>
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