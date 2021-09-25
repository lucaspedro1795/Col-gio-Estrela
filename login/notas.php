<?php
 
// inclui o arquivo de inicialização
require 'init.php';
 


$nota_c_1 = $_SESSION['nota_c_1'];
$nota_c_2 = $_SESSION['nota_c_2'];
$nota_c_3 = $_SESSION['nota_c_3'];
$nota_c_4 = $_SESSION['nota_c_4'];
 

$nota_p_1 = $_SESSION['nota_p_1'];
$nota_p_2 = $_SESSION['nota_p_2'];
$nota_p_3 = $_SESSION['nota_p_3'];
$nota_p_4 = $_SESSION['nota_p_4'];

$nota_m_1 = $_SESSION['nota_m_1'];
$nota_m_2 = $_SESSION['nota_m_2'];
$nota_m_3 = $_SESSION['nota_m_3'];
$nota_m_4 = $_SESSION['nota_m_4'];



$PDO = db_connect();
$sql = "SELECT nota_c_1,nota_c_2,nota_c_3,nota_c_4,nota_p_1,nota_p_2,nota_p_3,nota_p_4,nota_m_1,nota_m_2,nota_m_3,nota_m_4 FROM users";


$stmt->execute();
 
