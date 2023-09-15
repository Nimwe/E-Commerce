<?php

if(!isset ($_SESSION['client']['id_client'])) {
    echo ('pas de client connecté commande impossible'); die;
}

function creer(){
    require ('model/m_commande.php');
    m_creation_commande($_POST);
    header('location:'.BASE.'/produit/liste_produits');
}

function panier($idc){
    require ('model/m_commande.php');
    $pp = m_panier($idc);
    require('view/panier.php');
}

function cmde_prec(){
    require ('model/m_commande.php');
    $listec = m_liste_cmde ();
    require ('view/liste_commande.php');
}





?>