<?php
 
require_once 'init.php';
 
// pega os dados do formuário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$ano = isset($_POST['ano']) ? $_POST['ano'] : null;
 
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($name) || empty($matricula) || empty($password) || empty($ano))
{
    echo '<script> alert ("Volte e Preencha os Campos"); location.href=("form-add.php")</script>';
    exit;
}
 
 
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO users(name, matricula, password, ano) VALUES(:name, :matricula, :password, :ano)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':matricula', $matricula);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':ano', $ano);
 
 
if ($stmt->execute())
{
    header('Location: cadastro.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}

