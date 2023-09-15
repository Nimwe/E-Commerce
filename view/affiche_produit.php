<!-- http://localhost/ecommerce/produit/detail_produit/1 -->
<?php require ('header.php'); ?>

<body>

<h1> <?= $prod['designation'] ?> </h1>

<img src="../../img/<?= $prod['photo'] ?>"><br>
<p>Prix : <?= $prod['prix_unitaire'] ?> €</p><br>

<?php
if (isset ($_SESSION['client']['id_client'])) { 
?>

<form action="<?= BASE ?>/commande/creer" method="post">
    <input type="hidden" name="idp" value=<?= $prod['id_produit']?>>
    <label for="qte">Quantité</label>
    <input type="number" name="qte" value="1">
    <input type="submit" value="Acheter">
</form>

<?php
}else{ 
?>
    <a href = 'http://localhost/ecommerce/produit/liste_produits'>Merci de vous connecter pour passer commande</a>  

<?php
}
?>

</body>
</html>
