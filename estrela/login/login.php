<?php
 
// inclui o arquivo de inicialização
require 'init.php';
 
// resgata variáveis do formulário
$matricula = isset($_POST['icon_prefix']) ? $_POST['icon_prefix'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
 
if (empty($matricula) || empty($password))
{
    echo "Informe Matricula e senha";
    exit;
}
 
 
$PDO = db_connect();
 
$sql = "SELECT id, serie, nome FROM alunos WHERE matricula = :matricula AND password = :password";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':matricula', $matricula);
$stmt->bindParam(':password', $password);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    echo '<script> alert ("Matricula e Senha Incorretos"); location.href=("../form-login.php")</script>';
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_nome'] = $user['nome'];
$_SESSION['user_serie'] = $user['serie'];
 
header('Location: panel.php');