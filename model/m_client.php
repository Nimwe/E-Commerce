<?php

function m_verify($p) {
require ('connect.php');
$sql = "SELECT * FROM client WHERE email = ? AND password = ?";
$statement = $pdo->prepare($sql);
$statement->execute([$p['email'], $p['password']]);
$res =$statement->fetch();
if ($statement->rowCount() == 1) {
    // $_SESSION['id_client'] = $res['id_client'];
    // $_SESSION['nom_client'] = $res['nom_client'];
    $_SESSION['client'] = $res;
    return true ;
} else {
    return false ;
}}

function enregistrer($elts) {
    require 'connect.php';
    $sql = $pdo->prepare( 'INSERT into client (nom_client, email, password) VALUES (?, ?, ?)');
    $sql->execute([$elts['nom_client'],$elts['email'],$elts['password']]);
}


   






// function listeOne($idc) {
//     require 'connect.php';
//     $sql = $pdo->prepare( 'SELECT * from client WHERE id = ?');
//     $sql->execute([$idc]);
//     $row = $sql->fetch();
//     return $row ;
// }
// function listeclient(){
//     require 'connect.php';
//     $sql = $pdo->prepare( 'SELECT * from client');
//     $sql->execute();
//     $rows = $sql->fetchAll();
//     return $rows ;
// }

// function modificationclient($elts) {   
//     $id_client = $elts['id_client'];
//     $nom = $elts['nom_client'];
//     $email = $elts['email'];
//     $password = $elts['password'];
//     require 'connect.php';
//     $sql = $pdo -> prepare('UPDATE client SET Nom = ?, email = ?, password = ? WHERE id_client = ?');
//     $sql ->execute([$nom,$email,$password,$id]);
// }

// function suppressionclient ($id) {
//     require 'connect.php';
//     $sql = $pdo -> prepare('DELETE from client WHERE id_client = ?');
//     $sql ->execute([$id]); 
// }


?>