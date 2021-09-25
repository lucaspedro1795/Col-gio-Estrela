<?php
 
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'sql311.epizy.com');
define('DB_PORT', '3306');
define('DB_USER', 'epiz_26106020');
define('DB_PASS', 'xHkdoYJds3wS9d');
define('DB_NAME', 'epiz_26106020_estrela');
 
// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
// inclui o arquivo de funçõees
require_once 'functions-adm.php';