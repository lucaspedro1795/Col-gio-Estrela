<?php

 

// inclui o arquivo de inicialização

require 'init_adm.php';

 

// resgata variáveis do formulário

$id = isset($_POST['id']) ? $_POST['id'] : '';

$senha = isset($_POST['password']) ? $_POST['password'] : '';

 

if (empty($id) || empty($senha))

{

    echo "<script>alert('Informe o seu Código e sua senha'); location.href=('form-login-adm.php');</script> ";

    exit;

}

 

 

$PDO = db_connect();

 

$sql = "SELECT id, nome, funcao FROM adm WHERE id = :id AND senha = :senha";

$stmt = $PDO->prepare($sql);

 

$stmt->bindParam(':id', $id);

$stmt->bindParam(':senha', $senha);

 

$stmt->execute();

 

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

 

if (count($users) <= 0)

{

    echo '<script> alert ("Código e Senha Incorretos"); location.href=("form-login-adm.php")</script>';

    exit;

}

 

// pega o primeiro usuário

$user = $users[0];

 

session_start();

$_SESSION['logged_in'] = true;

$_SESSION['user_id'] = $user['id'];

$_SESSION['user_nome'] = $user['nome'];

$_SESSION['user_funcao'] = $user['funcao'];

 

header('Location: panel_adm.php');