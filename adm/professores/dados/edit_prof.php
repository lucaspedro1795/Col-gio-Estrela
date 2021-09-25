<?php

 

require_once '../init_prof.php';

 

// resgata os valores do formulário

$nome = isset($_POST['nome']) ? $_POST['nome'] : null;

$nascimento= isset($_POST['nascimento']) ? $_POST['nascimento'] : null;

$rg = isset($_POST['rg']) ? $_POST['rg'] : null;

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;

$endereco = isset($_POST['endereco']) ? $_POST['endereco'] : null;

$num_casa = isset($_POST['num_casa']) ? $_POST['num_casa'] : null;

$bairro = isset($_POST['bairro']) ? $_POST['bairro'] : null;

$cidade = isset($_POST['cidade']) ? $_POST['cidade'] : null;

$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : null;

$disciplina = isset($_POST['disciplina']) ? $_POST['disciplina'] : null;

$senha = isset($_POST['senha']) ? $_POST['senha'] : null;

$email = isset($_POST['email']) ? $_POST['email'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;

 

// validação (bem simples, mais uma vez)

if (empty($nome) || empty($nascimento) || empty($rg) || empty($cpf) || empty($endereco) || empty($num_casa) || empty($bairro) || empty($cidade) || empty($telefone) || empty($disciplina) || empty($senha) || empty($email))

{

    echo "Volte e preencha todos os campos";

    exit;

}

 



// atualiza o banco

$PDO = db_connect();

$sql = "UPDATE professor SET nome= :nome, nascimento= :nascimento, rg= :rg, cpf= :cpf, endereco= :endereco, num_casa= :num_casa, bairro= :bairro, cidade= :cidade, telefone= :telefone, disciplina= :disciplina, senha= :senha, email= :email WHERE id = :id";

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

$stmt->bindParam(':disciplina', $disciplina);

$stmt->bindParam(':senha', $senha);

$stmt->bindParam(':email', $email);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);

 

if ($stmt->execute())

{

    header('Location:../panel_prof_adm.php');

}

else

{

    echo "Erro ao alterar";

    print_r($stmt->errorInfo());

}