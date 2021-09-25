<?php
 
require_once '../init.php';
 
// resgata os valores do formulário
$nota_c_1 = isset($_POST['nota_c_1']) ? $_POST['nota_c_1'] : null;
$nota_c_2 = isset($_POST['nota_c_2']) ? $_POST['nota_c_2'] : null;
$nota_c_3 = isset($_POST['nota_c_3']) ? $_POST['nota_c_3'] : null;
$nota_c_4 = isset($_POST['nota_c_4']) ? $_POST['nota_c_4'] : null;

$nota_p_1 = isset($_POST['nota_p_1']) ? $_POST['nota_p_1'] : null;
$nota_p_2 = isset($_POST['nota_p_2']) ? $_POST['nota_p_2'] : null;
$nota_p_3 = isset($_POST['nota_p_3']) ? $_POST['nota_p_3'] : null;
$nota_p_4 = isset($_POST['nota_p_4']) ? $_POST['nota_p_4'] : null;

$nota_m_1 = isset($_POST['nota_m_1']) ? $_POST['nota_m_1'] : null;
$nota_m_2 = isset($_POST['nota_m_2']) ? $_POST['nota_m_2'] : null;
$nota_m_3 = isset($_POST['nota_m_3']) ? $_POST['nota_m_3'] : null;
$nota_m_4 = isset($_POST['nota_m_4']) ? $_POST['nota_m_4'] : null;

$nota_g_1 = isset($_POST['nota_g_1']) ? $_POST['nota_g_1'] : null;
$nota_g_2 = isset($_POST['nota_g_2']) ? $_POST['nota_g_2'] : null;
$nota_g_3 = isset($_POST['nota_g_3']) ? $_POST['nota_g_3'] : null;
$nota_g_4 = isset($_POST['nota_g_4']) ? $_POST['nota_g_4'] : null;

$nota_h_1 = isset($_POST['nota_h_1']) ? $_POST['nota_h_1'] : null;
$nota_h_2 = isset($_POST['nota_h_2']) ? $_POST['nota_h_2'] : null;
$nota_h_3 = isset($_POST['nota_h_3']) ? $_POST['nota_h_3'] : null;
$nota_h_4 = isset($_POST['nota_h_4']) ? $_POST['nota_h_4'] : null;

$nota_a_1 = isset($_POST['nota_a_1']) ? $_POST['nota_a_1'] : null;
$nota_a_2 = isset($_POST['nota_a_2']) ? $_POST['nota_a_2'] : null;
$nota_a_3 = isset($_POST['nota_a_3']) ? $_POST['nota_a_3'] : null;
$nota_a_4 = isset($_POST['nota_a_4']) ? $_POST['nota_a_4'] : null;

$nota_i_1 = isset($_POST['nota_i_1']) ? $_POST['nota_i_1'] : null;
$nota_i_2 = isset($_POST['nota_i_2']) ? $_POST['nota_i_2'] : null;
$nota_i_3 = isset($_POST['nota_i_3']) ? $_POST['nota_i_3'] : null;
$nota_i_4 = isset($_POST['nota_i_4']) ? $_POST['nota_i_4'] : null;

$nota_ge_1 = isset($_POST['nota_ge_1']) ? $_POST['nota_ge_1'] : null;
$nota_ge_2 = isset($_POST['nota_ge_2']) ? $_POST['nota_ge_2'] : null;
$nota_ge_3 = isset($_POST['nota_ge_3']) ? $_POST['nota_ge_3'] : null;
$nota_ge_4 = isset($_POST['nota_ge_4']) ? $_POST['nota_ge_4'] : null;
$id = isset($_POST['id']) ? $_POST['id'] : null;
 
// validação (bem simples, mais uma vez)
//if (empty($nota_c_1) || empty($nota_c_2) || empty($nota_c_3) || empty($nota_c_4) || empty($nota_p_1) || empty($nota_p_2) || empty($nota_p_3) || empty($nota_p_4) || empty($nota_m_1) || empty($nota_m_2) || empty($nota_m_3) || empty($nota_m_4) || empty($nota_g_1) || empty($nota_g_2) || empty($nota_g_3) || empty($nota_g_4)|| empty($nota_h_1) || empty($nota_h_2) || empty($nota_h_3) || empty($nota_h_4) || empty($nota_i_1) || empty($nota_i_2) || empty($nota_i_3) || empty($nota_i_4) || empty($nota_a_1) || empty($nota_a_2) || empty($nota_a_3) || empty($nota_a_4) || empty($nota_ge_1) || empty($nota_ge_2) || empty($nota_ge_3) || empty($nota_ge_4))
//{
//    echo "Volte e preencha todos os campos";
//}
 

// atualiza o banco
$PDO = db_connect();
$sql = "UPDATE users SET nota_c_1 = :nota_c_1, nota_c_2 = :nota_c_2, nota_c_3 = :nota_c_3,nota_c_4 = :nota_c_4, "
        . "nota_p_1 = :nota_p_1, nota_p_2 = :nota_p_2, nota_p_3 = :nota_p_3,nota_p_4 = :nota_p_4, "
        . "nota_m_1 = :nota_m_1, nota_m_2 = :nota_m_2, nota_m_3 = :nota_m_3,nota_m_4 = :nota_m_4, "
        . "nota_g_1 = :nota_g_1, nota_g_2 = :nota_g_2, nota_g_3 = :nota_g_3,nota_g_4 = :nota_g_4,"
        . "nota_ge_1 = :nota_ge_1, nota_ge_2 = :nota_ge_2, nota_ge_3 = :nota_ge_3,nota_ge_4 = :nota_ge_4,"
        . "nota_h_1 = :nota_h_1, nota_h_2 = :nota_h_2, nota_h_3 = :nota_h_3,nota_h_4 = :nota_h_4,"
        . "nota_i_1 = :nota_i_1, nota_i_2 = :nota_i_2, nota_i_3 = :nota_i_3,nota_i_4 = :nota_i_4,"
        . "nota_a_1 = :nota_a_1, nota_a_2 = :nota_a_2, nota_a_3 = :nota_a_3,nota_a_4 = :nota_a_4 WHERE id = :id";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':nota_c_1', $nota_c_1);
$stmt->bindParam(':nota_c_2', $nota_c_2);
$stmt->bindParam(':nota_c_3', $nota_c_3);
$stmt->bindParam(':nota_c_4', $nota_c_4);

$stmt->bindParam(':nota_p_1', $nota_p_1);
$stmt->bindParam(':nota_p_2', $nota_p_2);
$stmt->bindParam(':nota_p_3', $nota_p_3);
$stmt->bindParam(':nota_p_4', $nota_p_4);

$stmt->bindParam(':nota_m_1', $nota_m_1);
$stmt->bindParam(':nota_m_2', $nota_m_2);
$stmt->bindParam(':nota_m_3', $nota_m_3);
$stmt->bindParam(':nota_m_4', $nota_m_4);

$stmt->bindParam(':nota_g_1', $nota_g_1);
$stmt->bindParam(':nota_g_2', $nota_g_2);
$stmt->bindParam(':nota_g_3', $nota_g_3);
$stmt->bindParam(':nota_g_4', $nota_g_4);

$stmt->bindParam(':nota_h_1', $nota_h_1);
$stmt->bindParam(':nota_h_2', $nota_h_2);
$stmt->bindParam(':nota_h_3', $nota_h_3);
$stmt->bindParam(':nota_h_4', $nota_h_4);

$stmt->bindParam(':nota_i_1', $nota_i_1);
$stmt->bindParam(':nota_i_2', $nota_i_2);
$stmt->bindParam(':nota_i_3', $nota_i_3);
$stmt->bindParam(':nota_i_4', $nota_i_4);

$stmt->bindParam(':nota_a_1', $nota_a_1);
$stmt->bindParam(':nota_a_2', $nota_a_2);
$stmt->bindParam(':nota_a_3', $nota_a_3);
$stmt->bindParam(':nota_a_4', $nota_a_4);

$stmt->bindParam(':nota_ge_1', $nota_ge_1);
$stmt->bindParam(':nota_ge_2', $nota_ge_2);
$stmt->bindParam(':nota_ge_3', $nota_ge_3);
$stmt->bindParam(':nota_ge_4', $nota_ge_4);

$stmt->bindParam(':id', $id, PDO::PARAM_INT);
 
if ($stmt->execute())
{
    header('Location: ../salas/1_A.php');
}
else
{
    echo "Erro ao alterar";
    print_r($stmt->errorInfo());
}