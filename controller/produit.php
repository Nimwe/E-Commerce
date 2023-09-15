<?php

// route d'affichage du formulaire de creation de produit 
function f_creation_produit(){
    require ('view/f_creation_produit.php');
}

function creation_produit(){
    require ('model/m_produit.php');
    m_creation_produit($_POST);
}

function liste_produits(){
    require ('model/m_produit.php');
    $listep = m_liste_produits ();
    require ('view/liste_produits.php');
}
// Afficher le detail d'un produit
// Si un client est connecté afficher le bouton "Acheter"
function detail_produit($id){
    require('model/m_produit.php');
    $prod = m_get_produit($id);
    require('view/affiche_produit.php');
}

function creer(){}


?>
