<?php
session_start();
 
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Login - Colégio Estrela</title>
        <link rel="icon" href="img/logo.png">
    </head>
 
    <body>
        <section>
            <div>
                <h1>Sistema de Login ULTIMATE PHP</h1>
 
        <?php if (isLoggedIn()): ?>
            <p>Olá, <?php echo $_SESSION['user_name']; ?>. <a href="panel.php">Painel</a> | <a href="logout.php">Sair</a></p>
        <?php else: ?>
            <p>Olá, visitante. <a href="form-login.php">Login</a></p>
        <?php endif; ?>
            </div>  
        </section>
        
 
    </body>
</html>