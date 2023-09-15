
<!-- http://localhost/ecommerce/commande/f_creation_commande -->
<?php require ('header.php'); ?>

<body>
<form action="<?= BASE ?>/commande/m_creation_commande" method="post">
    <input type="hidden" name="id_client">
    <input type="date" name="password" placeholder="password" required>
    <input type="submit" value="ok">
</form>
</body>
</html>