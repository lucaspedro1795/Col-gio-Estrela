<?php

require 'init.php';

 

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

$sql = "SELECT nome, matricula, senha FROM aluno WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);

 

$stmt->execute();

 

$user = $stmt->fetch(PDO::FETCH_ASSOC);

 

// se o método fetch() não retornar um array, significa que o ID não corresponde a um usuário válido

if (!is_array($user))

{

    echo "Nenhum usuário encontrado";

    exit;

}

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

            

            

            label{

                font-family: Roboto Condensed , sans-serif;

                color: white;

                font-weight: bolder;

            }

            

            form{

                margin-top: 20px;

                margin-left: 30px;

                margin-bottom: -100px;

                display: block;

                overflow: hidden;

                

            }

            

            input{

                width: 250px;

                height: 30px;

                border-radius: 20px 20px 20px 20px;

                border:none;

                outline: none;

                margin-left: 10px;

                overflow: hidden;

                font-family: Roboto Condensed , sans-serif;

                text-align: center;

            }            

            

            #editar{

                color: darkblue;

                background-color: white;

                font-family: Roboto Condensed , sans-serif;

                width: 100px;

                float: right;

                margin-right: 220px;

            }

            

            #voltar{

                color: darkblue;

                background-color: white;

                font-family: Roboto Condensed , sans-serif;

                width: 150px;

                float: right;

                margin-right: -270px;

            }

            

        </style>

 

        <div class="top" style="overflow: hidden;">   

           <center> <img class="logo" src="images/icons/logo.png" alt="logo" "> </a> </center>

        </div>

        

      

        

        <div class="result" style="margin-left: 250px; height: 400px;overflow: hidden;">

            <h3 class="tt">Editar Dados do Aluno</h3>

            <form action="edit.php" method="post">

            <label for="name">Nome: </label><input type="text" name="name" id="name" value="<?php echo $user['nome'] ?>">

 

            <br><br>

 

            <label for="matricula">Matricula: </label><input type="text" name="matricula" id="matricula" value="<?php echo $user['matricula'] ?>">

           

            <br><br>

             

            <label for="password">Senha: </label><input type="text" name="password" id="password" value="<?php echo $user['password'] ?>">

 

            <br><br>

 

            <label for="ano">Ano: </label><input type="text" name="ano" id="ano" value="<?php echo $user['ano'] ?>">

 

            <br><br>

 

            <input type="hidden" name="id" value="<?php echo $id ?>">

 

            <input id="editar" type="submit" value="Alterar">

            <a href="cadastro.php"><input id="voltar" type="button"  value="Voltar para o Início"></a>

        </form>

            

            

        </div>

         

        

 

    </body>

</html>