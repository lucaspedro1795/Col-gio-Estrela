<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Aluno - Colégio Estrela</title>
        <link rel="icon" href="images/icons/logo.png">
        <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--====================
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
 
    <body>
        <style>
            .voltar{
                width: 100px;
                height: 50px;
                background-color: darkblue;
                float: right;
                position: relative;
                margin-left: 270px;
                border-radius: 50px 50px 50px 50px;
                margin-top: -50px;
            }  
        </style>
        <div class="limiter">
		<div class="container-login100" style="background-color: darkblue; ">
			<div class="wrap-login100">
                            <div class="login100-form-title" style="background-image: url(images/bac.jpg);">
					<span class="login100-form-title-1">
						Aluno
					</span>
				</div>

                            <form class="login100-form validate-form" action="login.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="É necessário a Matricula">
                                            <label class="label-input100" for="matricula">Matrícula:
                                            </label>
                                                <input class="input100" type="text" name="matricula" id="matricula">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "É necessário a Senha">
						<label class="label-input100" for="password">Senha: </label>
                                                <input class="input100"type="password" name="password" id="password">
						<span class="focus-input100"></span>
					</div>

                         

					<div class="container-login100-form-btn">
						<input class="login100-form-btn" type="submit" value="Entrar">
					</div>
                                
                                 <a  href="../index.php"><div class="voltar">
                                          <input style="float: right;" class="login100-form-btn" type="button" value="Voltar para o Início">
                                          </div></a>
                               
				</form>
                           
			</div>
		</div>
	</div>
 
        
 <!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
    </body>
</html>