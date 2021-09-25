<?php



require_once '../init_prof.php';

 

// pega o ID da URL

$id = isset($_GET['id']) ? $_GET['id'] : null;

 

// valida o ID

if (empty($id))

{

    echo "ID não informado";

    exit;

}

 

// remove do banco

$PDO = db_connect();

$sql = "DELETE FROM professor WHERE id = :id";

$stmt = $PDO->prepare($sql);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);

 

if ($stmt->execute())

{

    header('Location: ../panel_prof_adm.php');

}

else

{

    echo "Erro ao remover";

    print_r($stmt->errorInfo());

}



