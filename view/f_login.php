<!-- http://localhost/ecommerce/client/flogin -->

<body>
<?php require ('header.php') ;?>
<?php
if (!isset ($_SESSION['client']['id_client'])) { 
?>
<h2>Merci vous identifier</h2>
<form action="<?= BASE ?>/client/login" method="post">
    <label>Entrez votre Email</label>
    <input type="text" name="email" placeholder="email" required>  
    <br><br>
    <label>Entrez votre mot de passe</label>
    <input type="password" name="password" placeholder="password" required>
    <br><br>
    <input type="submit" value="Envoyer" class='button'>
</form>

<?php
}else{ 
?>

<p>Bienvenue <?php if(isset($_SESSION['client'])) {
    echo $_SESSION['client']['nom_client'];  }?> 
    <!-- <a href = 'http://localhost/ecommerce/client/logout'>Deconnection</a>   -->
</p> 
<?php
}
?>
</body>
</html>

