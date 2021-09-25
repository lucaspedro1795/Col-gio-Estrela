<?php
 
require_once 'init_prof.php';
 
// resgata os valores do formulário
$name = isset($_POST['name']) ? $_POST['name'] : null;
$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;
$disciplina = isset($_POST['disciplina']) ? $_POST['disciplina'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;
 
// validação (bem simples, mais uma vez)
if (empty($name) || empty($cpf) || empty($password) || empty($disciplina))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 

// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE profs SET name = :name, cpf = :cpf, password = :password, disciplina = :disciplina WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':cpf', $cpf);
$stmt->bindParam(':password', $password);
$stmt->bindParam(':disciplina', $disciplina);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: cadastro_prof.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}