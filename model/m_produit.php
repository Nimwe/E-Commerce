<?php

function m_creation_produit($p) {
require ('connect.php');
$des = $p ['designation'];
$ph = $p ['photo'];
$prix = $p ['prix_unitaire'];
$sql = "INSERT INTO produit (designation, photo, prix_unitaire) VALUES
(?, ?, ?)";
$statement = $pdo-> prepare($sql);
$statement ->execute([$des,$ph,$prix]);
}

function m_liste_produits() {
    require ('connect.php');
    $sql = "SELECT * FROM produit";
    $statement = $pdo-> prepare($sql);
    $statement ->execute();
    return $statement ->fetchAll();
    }


function m_get_produit($id) {
    require ('connect.php');
    $sql = "SELECT * FROM produit WHERE id_produit = ?";
    $statement = $pdo-> prepare($sql);
    $statement ->execute([$id]);
    return $statement ->fetch();
}   
    

?>