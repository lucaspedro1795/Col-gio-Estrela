<?php
require_once 'init_prof.php';
 
// abre a conexão
$PDO = db_connect();
 
// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php
$sql_count = "SELECT COUNT(*) AS total FROM profs ORDER BY name ASC";
 
// SQL para selecionar os registros
$sql = "SELECT id, name, cpf, password, disciplina FROM profs ORDER BY name ASC";
 
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
        <meta charset="utf-8">
        <title>Colégio Estrela</title>
        <link rel="icon" href="images/icons/logo.png">
        <link rel="stylesheet" type="text/css" href="css/main_panel.css">
        <link rel="stylesheet" type="text/css" href="../login/css/menu.css">
    </head>
 
    <body>
       
        <style>
            table{
                font-family: Roboto Condensed , sans-serif;
                font-size: 14px;
            }
            
            button{
                width: 70px;
                height: 30px;
                background-color: darkblue;
                color: white;
                border-radius: 20px 20px 20px 20px;
                border: none;
                outline: none;
            }
            
           
        </style>
       <div class="top"> 
           <center><img class="logo" src="images/icons/logo.png" alt="logo" "> </a></center>
           
        </div>
        <div class="sidenav">
            <nav class="navigation">
               <ul class="mainmenu">
                   <li><a href="select.php">Início</a></li>
                   <li><a href="form-add_prof.php">Adicionar Professor</a></li>
                   <li><a href="adm/logout_adm.php">Sair</a></li>
              </ul>
           </nav>
         </div>
        
        <div class="result" style="max-height: 100%;">
            <h3 class="tt">Lista de Usuários</h3>
            <h3 class="tt"> Total de usuários: <?php echo $total ?></h3>
            
 
        <?php if ($total > 0): ?>
 
        <table width="50%" border="1">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Senha</th>
                    <th>Disciplina</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['cpf'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                    <td><?php echo $user['disciplina'] ?></td>
                    <td>
                        <a href="form-edit_prof.php?id=<?php echo $user['id'] ?>"><button>Editar</button></a>
                        <a href="delete_prof.php?id=<?php echo $user['id'] ?>" onclick="return confirm('Tem certeza de que deseja remover?');"><button>Remover</button></a>
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