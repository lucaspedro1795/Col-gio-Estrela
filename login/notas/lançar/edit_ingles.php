<?php

 

require_once '../../init.php';

 

// resgata os valores do formulário

$pb_i = isset($_POST['pb_i']) ? $_POST['pb_i'] : null;

$sb_i = isset($_POST['sb_i']) ? $_POST['sb_i'] : null;

$tb_i = isset($_POST['tb_i']) ? $_POST['tb_i'] : null;

$qb_i = isset($_POST['qb_i']) ? $_POST['qb_i'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;

 

// validação (bem simples, mais uma vez)

if (empty($pb_i) || empty($sb_i) || empty($tb_i) || empty($qb_i))

{

    echo "Volte e preencha todos os campos";

    exit;

}

 



// atualiza o banco

$PDO = db_connect();

$sql = "UPDATE aluno SET pb_i = :pb_i, sb_i = :sb_i, tb_i = :tb_i, qb_i = :qb_i WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':pb_i', $pb_i);

$stmt->bindParam(':sb_i', $sb_i);

$stmt->bindParam(':tb_i', $tb_i);

$stmt->bindParam(':qb_i', $qb_i);

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