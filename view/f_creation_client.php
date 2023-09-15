<!-- http://localhost/ecommerce/client/formcreer -->
<?php require ('header.php'); ?>

<body>
    <h2>Formulaire de création d'un nouveau client</h2>

<form action="<?= BASE ?>/client/creer" method="POST">
    <input type="text" name="nom_client" placeholder="Nom" required>
    <input type="text" name="email" placeholder="Email" required>
    <input type="text" name="password" placeholder="Password" required>
    <input type="submit" value="ok">
</form>
</body>
</html>