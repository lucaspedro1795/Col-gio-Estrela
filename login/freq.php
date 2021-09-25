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

$sql = "SELECT id,name, nota_c_1,nota_c_2,nota_c_3,nota_c_4,nota_p_1,nota_p_2,"
        . "nota_p_3,nota_p_4,nota_m_1,nota_m_2,nota_m_3,nota_m_4,nota_g_1,nota_g_2,nota_g_3,nota_g_4 FROM users where id = $id ";

// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();


?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Colégio Estrela</title>
        <link rel="icon" href="images/icons/logo.png">
        <link rel="stylesheet" type="text/css" href="css/main_panel.css">
        <link rel="stylesheet" type="text/css" href="../login/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../login/css/bolet.css">
    </head>
 
    <body>
        <div class="top">   
            <img class="logo" src="images/icons/logo.png" alt="logo" "> </a>
            <div class="user">   
                <p class="dados"><?php echo $_SESSION['user_name']; ?><br><?php echo $_SESSION['user_ano']; ?> |
                    <a class="exit" href="logout.php">Sair</a> </p>
            </div>
            
        </div>
        
        <div class="sidenav">
            <nav class="navigation">
               <ul class="mainmenu">
                   <li><a href="panel.php">Início</a></li>
                   <li><a href="">Acadêmico</a>
                       <ul class="submenu">
                           <li><a href="boletim.php">Boletim Escolar</a></li>
                           <li><a href="#">Frenquência Escolar</a></li>
                       </ul>
                   </li>
                   <li><a href="mensalidade.php">Pagamento de Mensalidade</a></li>
                   <li><a href="">Calendário Escolar</a></li>
              </ul>
           </nav>
         </div>
        
        <div class="result">
            <h3 class="tt">Frequência Escolar</h3>
            <br>
            <div class="anos">
                <nav id="menu">
                        <ul>
                            <label>Ano Letivo</label>
                           <li><a href="#">2020</a></li>
                        </ul>
                </nav>
            </div>
            <br>
            <div class="notas">
                <table border="1">
                    <thead>
                        <tr>
                            <th class="df tudo" rowspan="2" colspan="2">DISCIPLINAS</th>
                            <th class="df tudo" colspan="13">FALTAS MENSAIS</th>
                        </tr>
                        <tr class="df">
                            <th class="tudo" valign="middle">JAN</th>
                            <th class="tudo" valign="middle">FEV</th>
                            <th class="tudo" valign="middle">MAR</th>
                            <th class="tudo" valign="middle">ABR</th>
                            <th class="tudo" valign="middle">MAI</th>
                            <th class="tudo" valign="middle">JUN</th>
                            <th class="tudo" valign="middle">JUL</th>
                            <th class="tudo" valign="middle">AGO</th>
                            <th class="tudo" valign="middle">SET</th>
                            <th class="tudo" valign="middle">OUT</th>
                            <th class="tudo" valign="middle">NOV</th>
                            <th class="tudo" valign="middle">DEZ</th>
                            <th class="tudo" valign="middle">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="tudo" nowrap="nowrap" colspan="2">CIÊNCIAS</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                            <td class="tudo md" nowrap="nowrap" align="center">-</td>
                        </tr>
                        <tr>
                            <td class=" df tudo" nowrap="nowrap" colspan="2">GRAMÁTICA</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                        </tr>
                        <tr>
                            <td class=" tudo" nowrap="nowrap" colspan="2">MATEMÁTICA</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                        </tr>
                        <tr>
                            <td class="df tudo" nowrap="nowrap" colspan="2">HISTÓRIA</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                        </tr> 
                        <tr>
                            <td class="tudo" nowrap="nowrap" colspan="2">GEOGRAFIA</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                        </tr>
                        <tr>
                            <td class="df tudo" nowrap="nowrap" colspan="2">ARTES</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                        </tr>
                        <tr>
                            <td class="tudo" nowrap="nowrap" colspan="2">PRODUÇÃO TEXTUAL</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md tudo" nowrap="nowrap" align="center">-</td>
                        </tr>
                        <tr>
                            <td class="df tudo" nowrap="nowrap" colspan="2">INGLÊS</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                            <td class="md df tudo" nowrap="nowrap" align="center">-</td>
                        </tr>
                    </tbody>
                </table>

                
            </div>
        </div>    
    </body>
</html>