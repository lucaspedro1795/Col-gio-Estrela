<?php

 

require_once '../../init.php';

 

// resgata os valores do formulário

$pb_gr = isset($_POST['pb_gr']) ? $_POST['pb_gr'] : null;

$sb_gr = isset($_POST['sb_gr']) ? $_POST['sb_gr'] : null;

$tb_gr = isset($_POST['tb_gr']) ? $_POST['tb_gr'] : null;

$qb_gr = isset($_POST['qb_gr']) ? $_POST['qb_gr'] : null;

$id = isset($_POST['id']) ? $_POST['id'] : null;

 

// validação (bem simples, mais uma vez)

if (empty($pb_gr) || empty($sb_gr) || empty($tb_gr) || empty($qb_gr))

{

    echo "Volte e preencha todos os campos";

    exit;

}

 



// atualiza o banco

$PDO = db_connect();

$sql = "UPDATE aluno SET pb_gr = :pb_gr, sb_gr = :sb_gr, tb_gr = :tb_gr, qb_gr = :qb_gr WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':pb_gr', $pb_gr);

$stmt->bindParam(':sb_gr', $sb_gr);

$stmt->bindParam(':tb_gr', $tb_gr);

$stmt->bindParam(':qb_gr', $qb_gr);

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