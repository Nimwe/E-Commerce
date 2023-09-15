<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASE ?>/view/style.css" rel="stylesheet">
    <title>Liste Produits</title>
</head>

<?php if (!isset ($_SESSION['client']['id_client'])) { ?>
<p class="ident"><a href = 'http://localhost/ecommerce/client/flogin'>
Identifiez-vous
</a></p>


<?php }else{ ?>

<p class="ident">Bienvenue <?php if(isset($_SESSION['client'])) { 
    echo $_SESSION['client']['nom_client'];}?>
<br>
<a href = 'http://localhost/ecommerce/client/logout' class="ident">
Deconnection
</a>
<br>
<?php 
if (isset($_SESSION['commande'])) { ?>
<a href = 'http://localhost/ecommerce/commande/panier/<?=$_SESSION['commande']?>' >
Panier
</a>  
<br>
<?php } ?>
<a href = 'http://localhost/ecommerce/commande/cmde_prec' class="ident">
Vos commandes
</a>
<br>
<?php } ?>
</p> 
<h1>E-commerce</h1>
</header>

</body>
</html>