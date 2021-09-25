<?php
session_start();
 
require_once 'init.php';
 
require 'check.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Colégio Estrela</title>
        <link rel="icon" href="images/icons/logo.png">
        <link rel="stylesheet" type="text/css" href="css/main_panel.css">
        <link rel="stylesheet" type="text/css" href="../login/css/menu.css">
        <link rel="stylesheet" type="text/css" href="css/mob.css">
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
                   <li><a href="#">Início</a></li>
                   <li><a href="">Acadêmico</a>
                       <ul class="submenu">
                           <li><a href="boletim.php">Boletim Escolar</a></li>
                           <li><a href="freq.php">Frenquência Escolar</a></li>
                       </ul>
                   </li>
                   <li><a href="mensalidade.php">Pagamento de Mensalidade</a></li>
                   <li><a href="#">Calendário Escolar</a></li>
                   
              </ul>
           </nav>
         </div>
        
        <div class="result">
            <h3 class="tt">Início</h3>
            
        </div>    
    </body>
</html>