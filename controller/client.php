<?php

function formcreer() {
    require ('view/f_creation_client.php');
}

function creer(){
    require ('model/m_client.php');
    enregistrer($_POST); 
}

// Charge le formlaire de login avec les champs email et password
function flogin() {
    require ('view/f_login.php');
}

// Charge le model client
function login(){
    require ('model/m_client.php');
// si login et password correct ( ds model)
// stocke l'id du client dans $_SESSION (ds model) et
if(m_verify($_POST)) {
    // echo "ok"; 
    // print_r($_SESSION);
    // rediriger vers la page de commande
header('location:'.BASE.'/produit/liste_produits/');   
} else {   echo "bad request";
}}

function logout() {
    session_start();
    session_unset();
    session_destroy();
    header ('location:'.BASE.'/produit/liste_produits');

}

// function liste() {
//     require ('model/m_client.php');
//     $client = listeclient();
//     require ('view/client/listeclient.php');
//   }
  
//   function afficheOne($idc) {
//      require ('model/m_client.php');
//      $lclient = listeOne($idc) ;
//      require ('view/client/affiche1client.php');
//   }

//   function formmodif($id) {
//     require ('model/m_client.php');
//     $lclient = listeOne($id) ;
//     require ('view/client/modifclient.php');
//   }
  
//   function modifier(){
//     require ('model/m_client.php');
//     modification ($_POST); 
//   }

?>