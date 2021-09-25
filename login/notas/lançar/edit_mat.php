<?php

 

require_once '../../init.php';

 

// resgata os valores do formulário

$pb_m = isset($_POST['pb_m']) ? $_POST['pb_m'] : null;

$sb_m = isset($_POST['sb_m']) ? $_POST['sb_m'] : null;

$tb_m = isset($_POST['tb_m']) ? $_POST['tb_m'] : null;

$qb_m = isset($_POST['qb_m']) ? $_POST['qb_m'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;

 

// validação (bem simples, mais uma vez)

if (empty($pb_m) || empty($sb_m) || empty($tb_m) || empty($qb_m))

{

    echo "Volte e preencha todos os campos";

    exit;

}

 



// atualiza o banco

$PDO = db_connect();

$sql = "UPDATE aluno SET pb_m = :pb_m, sb_m = :sb_m, tb_m = :tb_m, qb_m = :qb_m WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':pb_m', $pb_m);

$stmt->bindParam(':sb_m', $sb_m);

$stmt->bindParam(':tb_m', $tb_m);

$stmt->bindParam(':qb_m', $qb_m);

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