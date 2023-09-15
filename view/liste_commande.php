<!-- http://localhost/ecommerce/commande/cmde_prec -->
<?php require ('header.php'); ?>

<body>
<?php

foreach ($listec as $item) { ?>
 <h2><a href="<?= BASE ?>/commande/panier/<?=$item['id_commande']?>">
 <?=$item['id_commande']?>:<?=$item['date_commande']?></a></h2>
<?php    
}
?>
</body>
</html>
