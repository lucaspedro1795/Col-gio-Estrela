<?php

 

require_once '../init.php';

 

// resgata os valores do formulário

$matricula = isset($_POST['matricula']) ? $_POST['matricula'] : null;

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;

$nascimento= isset($_POST['nascimento']) ? $_POST['nascimento'] : null;

$rg = isset($_POST['rg']) ? $_POST['rg'] : null;

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;

$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : null;

$num_casa = isset($_POST['num_casa']) ? $_POST['num_casa'] : null;

$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : null;

$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;

$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;

$serie = isset($_POST['serie']) ? $_POST['serie'] : null;

$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

$email = isset($_POST['email']) ? $_POST['email'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;

 

// validação (bem simples, mais uma vez)

if (empty($matricula) || empty($nome) || empty($nascimento) || empty($rg) || empty($cpf) || empty($endereco) || empty($num_casa) || empty($bairro) || empty($cidade) || empty($telefone) || empty($serie) || empty($senha) || empty($email))

{

    echo "Volte e preencha todos os campos";

    exit;

}

 



// atualiza o banco

$PDO = db_connect();

$sql = "INSERT INTO aluno (matricula,nome,nascimento,rg,cpf,endereco,num_casa,bairro,cidade,telefone,serie,senha,email) VALUES (:matricula, :nome,  :nascimento, :rg, :cpf, :endereco, :num_casa,:bairro,:cidade, :telefone, :serie, :senha, :email)";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':matricula', $matricula);

$stmt->bindParam(':nome', $nome);

$stmt->bindParam(':nascimento', $nascimento);

$stmt->bindParam(':rg', $rg);

$stmt->bindParam(':cpf', $cpf);

$stmt->bindParam(':endereco', $endereco);

$stmt->bindParam(':num_casa', $num_casa);

$stmt->bindParam(':bairro', $bairro);

$stmt->bindParam(':cidade', $cidade);

$stmt->bindParam(':telefone', $telefone);

$stmt->bindParam(':serie', $serie);

$stmt->bindParam(':senha', $senha);

$stmt->bindParam(':email', $email);

 

if ($stmt->execute())

{

    header('Location:../panel_alunos_adm.php');

}

else

{

    echo "Erro ao alterar";

    print_r($stmt->errorInfo());

}