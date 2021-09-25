<?php
 
require_once 'init_prof.php';
 
// pega os dados do formuário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$disciplina = isset($_POST['disciplina']) ? $_POST['disciplina'] : null;
 
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($name) || empty($cpf) || empty($password) || empty($disciplina))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 
 
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO profs (name, cpf, password, disciplina) VALUES(:name, :cpf, :password, :disciplina)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':disciplina', $disciplina);
 
 
if ($stmt->execute())
{
    header('Location: cadastro_prof.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}

