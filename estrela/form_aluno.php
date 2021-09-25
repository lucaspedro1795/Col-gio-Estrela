<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aluno - Estrela-ON</title>
    
    <!-- FAVICON-->
    <link rel="shortcut icon" href="images/logo-removebg-preview.png" type="image/x-icon">

    <!-- CSS  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>
<body>
    <section>
        <div class="form">
        <center>
            <img style="width: 80px; height: 80px" src="images/logo-removebg-preview.png"/>
            <br><br>
            <div class="row">
    <form class="col s12" action="login/login.php" method="POST">
      <div class="row">
        <div class="input-field col s11">
          <i class="material-icons prefix indigo-text">account_circle</i>
          <input id="icon_prefix" name="matricula" type="text" class="validate">
          <label for="icon_prefix">Matrícula</label>
        </div>
        <br<br>
        <div class="input-field col s11">
          <i class="material-icons prefix indigo-text">lock</i>
          <input id="password" name="password" type="password" class="validate">
          <label for="password">Senha</label>
        </div>
      </div>
      <button class="waves-effect waves-light btn indigo" type="submit"><i class="material-icons right">lock_open</i>Entrar</button>
  <br><br><br>
    </form>
  </div>

  
            <a class="indigo-text" href="form-login.php">Voltar</a>
        </center>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>
</body>
</html>