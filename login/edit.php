<?php
 
require_once 'init.php';
 
// resgata os valores do formulário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$email = isset($_POST['email']) ? $_POST['email'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$ano = isset($_POST['ano']) ? $_POST['ano'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;
 
// validação (bem simples, mais uma vez)
if (empty($name) || empty($email) || empty($password) || empty($ano))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 

// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE users SET name = :name, email = :email, password = :password, ano = :ano WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':ano', $ano);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: cadastro.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}