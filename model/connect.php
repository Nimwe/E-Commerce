<?php 

$dbname = "ecommerce" ;
$dbhost = "127.0.0.1" ;
$dbuser = "root" ;
$password = "" ;

$pdo = new PDO("mysql:host=".$dbhost.";dbname=".$dbname.";charset=UTF8", $dbuser, $password) ;
$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>