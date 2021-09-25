<?php

 

// inclui o arquivo de inicialização

require 'init_prof.php';

 

// resgata variáveis do formulário

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';

$password = isset($_POST['password']) ? $_POST['password'] : '';

 

if (empty($cpf) || empty($password))

{

    echo "Informe CPF e senha";

    exit;

}

 

 

$PDO = db_connect();

 

$sql = "SELECT id, disciplina, nome FROM professor WHERE cpf = :cpf AND senha = :password";

$stmt = $PDO->prepare($sql);

 

$stmt->bindParam(':cpf', $cpf);

$stmt->bindParam(':password', $password);

 

$stmt->execute();

 

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

 

if (count($users) <= 0)

{

    echo '<script> alert ("CPF e Senha Incorretos"); location.href=("form-prof.php")</script>';

    exit;

}

 

// pega o primeiro usuário

$user = $users[0];

 

session_start();

$_SESSION['logged_in'] = true;

$_SESSION['user_id'] = $user['id'];

$_SESSION['user_nome_prof'] = $user['nome'];

$_SESSION['user_disciplina'] = $user['disciplina'];

 

header('Location: panel_prof.php');