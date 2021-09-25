<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acesso Restrito - Colégio</title>
        <link rel="icon" href="images/icons/logo.png">
    </head>
    <body>
        <style>
            body{
                background-color: darkblue;
                background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 50%, rgba(0,212,255,1) 100%);
            }
            
            .select{
                width: 1000px;
                height: 500px;
                background-color: white;
                margin-top: 50px;
            }
            
            button{
                width: 150px;
                height: 50px;
                background-color: darkblue;
                border: none;
                border-radius: 50px 50px 50px 50px;
                color: white;
                margin-top: 50px;
                font-family: Roboto Condensed , sans-serif; 
                font-size: 16px;
                outline: none;
                cursor: pointer;
            }
            
            .prof{
                margin-left: 10px;
            }
            
            h1{
              
                font-family: Roboto Condensed , sans-serif; 
                font-size: 16px; 
            }
        </style>
    <center>
        <div class="select">
            <img src="images/icons/logo.png" style="width: 200px; height: 200px;">
            <h1>Escolha qual plataforma você deseja acessar:</h1>
            <a class="aluno" href="cadastro.php"><button>Aluno </button></a>
            <a href="cadastro_prof.php"><button class="prof">Professores </button></a>
        </div>
    </center>
</body>
</html>
