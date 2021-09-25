<!doctype html>

<html lang="pt/br">

    <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Matrícula - Colégio Estrela</title>

    <!-- FAVICON-->
    <link rel="shortcut icon" href="../../images/logo-removebg-preview.png" type="image/x-icon">

    <!-- CSS  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
   
    </head>
    <body>
    <nav class="indigo darken-34" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="#" class="center brand-logo"><img class="logo"
            src="../../../images/logo.png" style="width:90px; height:60px;" alt="Logo" /></a>
            <ul id="dropdown1" class="dropdown-content">
                <li><a href="../boletim.php" style="color: indigo; font-weight: 500;">Lançar Notas</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Frequência Escolar</a></li>
                <li><a href="#" style="color: indigo; font-weight: 500;">Atividades</a></li>
                <li><a href="agenda/agenda.php" style="color: indigo; font-weight: 500;">Agenda</a></li>
            </ul>
            <ul id="dropdown2" class="dropdown-content">
                <li><a href="../boletim.php">Lançar Notas</a></li>
                <li><a href="#">Frequência Escolar</a></li>
                <li><a href="#">Atividades</a></li>
                <li><a href="agenda/agenda.php">Agenda</a></li>
            </ul>
            <ul class="left hide-on-med-and-down">
                <li><a href="../panel_alunos_adm.php">Início</a></li>
                <li><a href="adicionar/add_aluno.php">Matrícula</a></li>
                <li><a onclick="M.toast({html: 'Em Breve!'})">Financeiro</a></li>
            </ul>
            <ul class="right hide-on-med-and-down">
                <li><a href="../logout_adm.php" class="waves-effect waves-light btn indigo hoverable ">Sair<i
                            class="material-icons right white-text">assignment_ind</i></a></li>
                            
            </ul>

            <ul class="sidenav" id="mobile-demo">
                <li><a href="../panel_alunos_adm.php">Início</a></li>
                <li><a href="adicionar/add_aluno.php">Matrícula</a></li>
                <li><a onclick=" M.toast({html: 'Em Breve!', classes: 'rounded'});">Financeiro</a></li>
                <li><a href="../logout_adm.php" class="waves-effect waves-light btn indigo">SAIR</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
       
 

            <h2 class="indigo-text center">Matricula <a class="waves-effect waves-light btn red center small modal-trigger" href="#modal1"><i class="material-icons left">warning</i>OBS</a></h2>
            <div id="modal1" class="modal">
                                    <div class="modal-content">
                                        <h4>ATENÇÃO</h4>
                                        <p>Caso você não esteja conseguindo visualizar alguma nota, não entre em pânico, pois isso já é uma função do sistema, por sua nota não ter sido lançada.</p>
                                        <p>Caso você não esteja conseguindo visualizar alguma nota e já forma lançadas notas anteriores, entre me contato para mais informações.</p>
                                    </div>
                                <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Fechar</a>
                                </div>
                            </div>
               
        <!-- Ciências -->
            <fieldset>
                <form action="add.php" method="post">

                    <label for="matricula">Matrícula: </label><input type="text" name="matricula" id="matricula" >
                    <br><br>
                    <label for="nome">Nome: </label><input type="text" name="nome" id="nome" >
                    <br><br>
                    <label for="nascimento">Data de Nascimento: </label><input type="date" name="nascimento" id="nascimento" >
                    <br><br>
                    <label for="rg">RG:</label><input type="text" name="rg" id="rg" >
                    <br><br>
                    <label for="cpf">CPF: </label><input type="text" name="cpf" id="cpf" >
                    <br><br>
                    <label for="endereco">Endereço: </label><input type="text" name="endereco" id="endereco" >
                    <br><br>
                    <label for="num_casa">Nº: </label><input type="text" name="num_casa" id="num_casa" >
                    <br><br>
                    <label for="bairro">Bairro:</label><input type="text" name="bairro" id="bairro" >
                    <br><br>
                    <label for="cidade">Cidade: </label><input type="text" name="cidade" id="cidade" >
                    <br><br>
                    <label for="telefone">Telefone: </label><input type="text" name="telefone" id="telefone" >
                    <br><br>
                    <label for="serie">Série: </label><input type="text" name="serie" id="serie" >
                    <br><br>
                    <label for="senha">Senha:</label><input type="text" name="senha" id="senha" >
                    <br><br>
                    <label for="email">Email: </label><input type="email" name="email" id="email" >
                    <button  class="waves-effect waves-light btn" type="submit"> <i class="material-icons left" >save</i>Salvar</button>
                    <a  class="waves-effect waves-light btn indigo" href="../panel_alunos_adm.php">Voltar</a>
                </form>
            </fieldset>

            <br>
            
          


         
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../../js/materialize.js"></script>
    <script src="../../js/init.js"></script>
    <script src="../../js/init2.js"></script>

    <script>
        const tel = document.getElementById('telefone') // Seletor do campo de telefone

tel.addEventListener('keypress', (e) => mascaraTelefone(e.target.value)) // Dispara quando digitado no campo
tel.addEventListener('change', (e) => mascaraTelefone(e.target.value)) // Dispara quando autocompletado o campo

const mascaraTelefone = (valor) => {
    valor = valor.replace(/\D/g, "")
    valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2")
    valor = valor.replace(/(\d)(\d{4})$/, "$1-$2")
    tel.value = valor // Insere o(s) valor(es) no campo
}

    </script>
        

    </body>

</html>