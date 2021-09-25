<?php

 

require_once '../../init.php';

 

// resgata os valores do formulário

$pb_c = isset($_POST['pb_c']) ? $_POST['pb_c'] : null;

$sb_c = isset($_POST['sb_c']) ? $_POST['sb_c'] : null;

$tb_c = isset($_POST['tb_c']) ? $_POST['tb_c'] : null;

$qb_c = isset($_POST['qb_c']) ? $_POST['qb_c'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;

 

// validação (bem simples, mais uma vez)

if (empty($pb_c) || empty($sb_c) || empty($tb_c) || empty($qb_c))

{

    echo "Volte e preencha todos os campos";

    exit;

}

 



// atualiza o banco

$PDO = db_connect();

$sql = "UPDATE aluno SET pb_c = :pb_c, sb_c = :sb_c, tb_c = :tb_c, qb_c = :qb_c WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':pb_c', $pb_c);

$stmt->bindParam(':sb_c', $sb_c);

$stmt->bindParam(':tb_c', $tb_c);

$stmt->bindParam(':qb_c', $qb_c);

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