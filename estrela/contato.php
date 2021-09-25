<!DOCTYPE html>
<html lang="pt/br">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Contato - Colégio Estrela</title>

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
    <nav class="indigo darken-34" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="center brand-logo"><img class="logo"
                    src="images/logo.png" style="width:90px; height:60px;" alt="Logo" /></a>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="#!">Ensino Infantil</a></li>
                <li><a href="#!">Ensino Fundamental I</a></li>
                <li><a href="#!">Ensino Fundamental II</a></li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a href="index.html">Início</a></li>
                <li><a href="#"></a></li>
                <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Modalidades<i
                            class="material-icons right">arrow_drop_down</i></a></li>
                <li><a href="#sobre">Sobre</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.html#eventos">Eventos</a></li>
                <li><a href="#">Contato</a></li>
                <li><a class="waves-effect waves-light btn indigo">Aluno Online <i
                            class="material-icons right white-text">assignment_ind</i></a></li>
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="index.html">Início</a></li>
                <li><a href="#">Modalidades</a></li>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="index.html#eventos">Eventos</a></li>
                <li><a href="#">Contato</a></li>
                <li><a class="waves-effect waves-light btn indigo">Aluno Online</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="section no-pad-bot" id="index-banner">
        <div class="parallax-container">
            <div class="parallax"><img
                    src="https://s2.glbimg.com/BPEyC5rw5yrQ2Bo60iXFvQm9HFM=/620x430/e.glbimg.com/og/ed/f/original/2019/05/07/1.jpg">
            </div>
            <br><br>
            <h1 class="header center indigo-text">Contato</h1>
            <h5 class="center  indigo-text">Entre em contato conosco, por meio do formulário abaixo.</h5>
            <div class="row center">
                <a href="#sobre" class="btn-floating btn-large indigo">
                    <i class="large material-icons">arrow_downward</i>
                </a>
            </div>
            <br><br>

        </div>
    </div>


    <div class="container" id="sobre">
        <div class="section">
        <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix indigo-text">account_circle</i>
          <input id="icon_prefix" type="text" class="validate">
          <label for="icon_prefix">Nome</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix indigo-text">phone</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Telefone</label>
        </div>
        <div class="input-field col s12">
          <i class="material-icons prefix indigo-text">email</i>
          <input id="icon_telephone" type="tel" class="validate">
          <label for="icon_telephone">Email</label>
        </div>
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea"></textarea>
          <label for="textarea1">Mensagem</label>
        </div>
        <br><br>
        <a class="waves-effect waves-light btn right indigo"><i class="material-icons right">send</i>Enviar</a>
      </div>
    </form>
  </div>
        </div>

    </div>

    <br><br>
    </div>

    </div>

    <footer class="page-footer indigo">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <img class="logo_2" style="margin-left: 130px;" src="images/logo-removebg-preview.png" alt="Logo">
                    <p class="grey-text text-lighten-4">Unidade I: Rua José de Alencar, 1821, João Cabral - Juazeiro do
                        Norte
                    <p> Unidade II: Rua Farias Brito, 727, Romeirão - Juazeiro do Norte</p>
                    </p>


                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Institucional</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Ensino Infantil</a></li>
                        <li><a class="white-text" href="#!">Ensino Fundamental I</a></li>
                        <li><a class="white-text" href="#!">Ensino Fundamental II</a></li>
                        <li><a class="white-text" href="#!">Aluno Online</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Redes Sociais</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Facebook</a></li>
                        <li><a class="white-text" href="#!">Instagram</a></li>
                        <li><a class="white-text" href="#!">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center-align">
                Colégio Estrela ©2021 Todos os Direitos Reservados.
            </div>
        </div>
    </footer>


    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/init.js"></script>

</body>

</html>