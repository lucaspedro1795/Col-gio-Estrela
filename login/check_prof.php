<?php
 
require_once 'init_prof.php';
 
if (!isLoggedIn())
{
    header('Location: form-prof.php');
}