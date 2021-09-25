<?php

 

require_once '../../init.php';

 

// resgata os valores do formulário

$pb_a = isset($_POST['pb_a']) ? $_POST['pb_a'] : null;

$sb_a = isset($_POST['sb_a']) ? $_POST['sb_a'] : null;

$tb_a = isset($_POST['tb_a']) ? $_POST['tb_a'] : null;

$qb_a = isset($_POST['qb_a']) ? $_POST['qb_a'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;

 

// validação (bem simples, mais uma vez)

// (empty($pb_a) || empty($sb_a) || empty($tb_a) || empty($qb_a))

//{

    //echo "Volte e preencha todos os campos";

    //exit;

//}

 



// atualiza o banco

$PDO = db_connect();

$sql = "UPDATE aluno SET pb_a = :pb_a, sb_a = :sb_a, tb_a = :tb_a, qb_a = :qb_a WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':pb_a', $pb_a);

$stmt->bindParam(':sb_a', $sb_a);

$stmt->bindParam(':tb_a', $tb_a);

$stmt->bindParam(':qb_a', $qb_a);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);

 

if ($stmt->execute())

{

    header('Location:../../panel_prof.php');

}

else

{

    echo "Erro ao alterar";

    print_r($stmt->errorInfo());

}