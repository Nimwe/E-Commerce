<?php

function m_creation_commande($c) {
require ('connect.php');
$idc = $_SESSION['client']['id_client'];

if (!isset($_SESSION['commande'])) {
    $sql = "INSERT INTO commande (id_client) VALUES (?)";
    $statement = $pdo-> prepare($sql);
    $statement ->execute([$idc]);
    $_SESSION['commande'] = $pdo->lastInsertId();
}

$sql = "INSERT INTO ligne_commande (id_commande,id_produit,quantite) VALUES (?,?,?)";
$statement = $pdo-> prepare($sql);
$statement ->execute([$_SESSION['commande'],$c['idp'],$c['qte']]);
}


function m_panier($idc) {
    // echo "<pre>";
    // print_r($_SESSION);
    require ('connect.php');
    $sql = "SELECT produit.designation , ligne_commande.quantite, produit.prix_unitaire , produit.prix_unitaire*ligne_commande.quantite as total_ligne FROM `produit`, ligne_commande WHERE produit.id_produit = ligne_commande.id_produit AND ligne_commande.id_commande = ?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$idc]);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function m_liste_cmde() {
    require 'connect.php';
    $sql= "SELECT * FROM commande WHERE id_client=?";
    $statement = $pdo->prepare($sql);
    $statement->execute([$_SESSION['client']['id_client']]);
    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
?>