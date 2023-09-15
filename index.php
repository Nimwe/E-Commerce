<?php
session_start();
define('BASE','http://localhost/ecommerce');

$action = $_GET['execution']; 
$tab = explode('/', $action); 
// var_dump($tab); die();

$arg = NULL;
$controller = $tab[0];
$fonction = $tab[1];
if (isset($tab[2])) {
    $arg = $tab[2];
}

require('controller/'.$controller.'.php');

if (isset($arg)) {
    $fonction($arg);
}else {
    $fonction();
}
// var_dump($fonction); die();

?>