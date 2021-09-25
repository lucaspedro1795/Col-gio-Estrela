<?php

 

require_once '../../init.php';

 

// resgata os valores do formulário

$pb_pt = isset($_POST['pb_pt']) ? $_POST['pb_pt'] : null;

$sb_pt = isset($_POST['sb_pt']) ? $_POST['sb_pt'] : null;

$tb_pt = isset($_POST['tb_pt']) ? $_POST['tb_pt'] : null;

$qb_pt = isset($_POST['qb_pt']) ? $_POST['qb_pt'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;

 

// validação (bem simples, mais uma vez)

if (empty($pb_pt) || empty($sb_pt) || empty($tb_pt) || empty($qb_pt))

{

    echo "Volte e preencha todos os campos";

    exit;

}

 



// atualiza o banco

$PDO = db_connect();

$sql = "UPDATE aluno SET pb_pt = :pb_pt, sb_pt = :sb_pt, tb_pt = :tb_pt, qb_pt = :qb_pt WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':pb_pt', $pb_pt);

$stmt->bindParam(':sb_pt', $sb_pt);

$stmt->bindParam(':tb_pt', $tb_pt);

$stmt->bindParam(':qb_pt', $qb_pt);

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