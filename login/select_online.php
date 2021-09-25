<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Aluno Online - Colégio</title>
        <link rel="icon" href="images/icons/logo.png">
        <link rel="stylesheet" type="text/css" href="css/mob2.css">
    </head>
    <body>
        <style>
            @media screen and (max-width: 360px) {

                body{
                    background-color: darkblue;
                    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 50%, rgba(0,212,255,1) 100%);
                    background-repeat: no-repeat;
                }

                .select{
                    width: auto;
                    float: left;
                 
                    margin-top: -10px;
                    position: fixed;
                    margin-left: -8px;
                }
             
                
                button{
                width: 50px;
                height: 50px;
                background-color: darkblue;
                border: none;
                border-radius: 50px 50px 50px 50px;
                color: white;
                font-family: Roboto Condensed , sans-serif; 
                font-size: 16px;
                outline: none;
                margin-left: -980px;
                top: 50%;
                cursor: pointer;
                }

            
            img{
                float: left;
                margin-left: 80px;
            }
            
            h1{
                float: left;
                margin-top: 200px;
                margin-left: -235px;
            }
            
            .prof{
                margin-left: 10px;
                margin-left: 300px;
                
            }
            
            #voltar{
               margin-top: 500px; 
               margin-left: -300px;
            }
            
            }

            
            
            
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
            
            .aluno{
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
            <a class="aluno" href="form-login.php"><button class="aluno">Aluno </button></a>
            <a href="form-prof.php"><button class="prof">Professores </button></a>
            <br>
            <br>
            <br>
            <a id="voltar" style="font-family: Roboto Condensed , sans-serif;font-size: 16px; text-decoration: none; color: black; " href="../index.php">Voltar</a>
        </div>
    </center>
</body>
</html>
