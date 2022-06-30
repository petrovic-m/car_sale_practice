<?php 

require 'vendor/autoload.php';

$redirect = new App\Object\DatabaseQuery;

if(!isset($session))
{

    $redirect->redirect('page-login.php');
    
}