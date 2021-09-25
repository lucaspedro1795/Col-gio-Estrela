<?php

 

require_once '../../init.php';

 

// resgata os valores do formulário

$pb_geo = isset($_POST['pb_geo']) ? $_POST['pb_geo'] : null;

$sb_geo = isset($_POST['sb_geo']) ? $_POST['sb_geo'] : null;

$tb_geo = isset($_POST['tb_geo']) ? $_POST['tb_geo'] : null;

$qb_geo = isset($_POST['qb_geo']) ? $_POST['qb_geo'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;

 

// validação (bem simples, mais uma vez)

if (empty($pb_geo) || empty($sb_geo) || empty($tb_geo) || empty($qb_geo))

{

    echo "Volte e preencha todos os campos";

    exit;

}

 



// atualiza o banco

$PDO = db_connect();

$sql = "UPDATE aluno SET pb_geo = :pb_geo, sb_geo = :sb_geo, tb_geo = :tb_geo, qb_geo = :qb_geo WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':pb_geo', $pb_geo);

$stmt->bindParam(':sb_geo', $sb_geo);

$stmt->bindParam(':tb_geo', $tb_geo);

$stmt->bindParam(':qb_geo', $qb_geo);

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