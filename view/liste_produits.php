<!-- http://localhost/ecommerce/produit/liste_produits --> 
 
<?php require ('header.php'); ?>

<h2 class='h2prod'>Catalogue</h2>

<?php   
    foreach ($listep as $prod) { 
?>
<h3 class="prod"> 
    <a href="<?= BASE ?>/produit/detail_produit/<?= $prod['id_produit']?>" class="prod">
    <?= $prod['designation'] ?></a>
</h3>

<?php } ?>
  
</body>
</html>