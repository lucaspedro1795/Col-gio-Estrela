<?php
 
require_once 'init_adm.php';
 
if (!isLoggedIn())
{
    header('Location: form-login-adm.php');
}