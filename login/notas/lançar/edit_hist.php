<?php

 

require_once '../../init.php';

 

// resgata os valores do formulário

$pb_h = isset($_POST['pb_h']) ? $_POST['pb_h'] : null;

$sb_h = isset($_POST['sb_h']) ? $_POST['sb_h'] : null;

$tb_h = isset($_POST['tb_h']) ? $_POST['tb_h'] : null;

$qb_h = isset($_POST['qb_h']) ? $_POST['qb_h'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;

 

// validação (bem simples, mais uma vez)

if (empty($pb_h) || empty($sb_h) || empty($tb_h) || empty($qb_h))

{

    echo "Volte e preencha todos os campos";

    exit;

}

 



// atualiza o banco

$PDO = db_connect();

$sql = "UPDATE aluno SET pb_h = :pb_h, sb_h = :sb_h, tb_h = :tb_h, qb_h = :qb_h WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':pb_h', $pb_h);

$stmt->bindParam(':sb_h', $sb_h);

$stmt->bindParam(':tb_h', $tb_h);

$stmt->bindParam(':qb_h', $qb_h);

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