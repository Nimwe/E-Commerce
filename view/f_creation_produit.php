<!-- http://localhost/ecommerce/produit/f_creation_produit -->
<?php require ('header.php'); ?>

<body>

    <h1>Formulaire de création d'un produit</h1>

<form action = "<?= BASE ?>/produit/creation_produit" 
method = "POST">
    
    <input type="text" name="designation" placeholder="Designation">
    <input type="text" name="photo" placeholder="Photo">
    <input type="number" name="prix_unitaire" step="0.01" min="0" max="1000">
    <input type="submit" value="enregistrer">

</form>

</body>
</html>




