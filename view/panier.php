<!-- http://localhost/ecommerce/commande/panier -->
<?php require ('header.php'); ?>

<body>
<h1>Votre Commande</h1>    

<h3>Merci pour votre commande <?=$_SESSION['client']['nom_client']?> </h3>

<table>
<tr>
        <th>Article</th>
        <th>Quantité </th>
        <th>Prix</th>
        <th>total ligne</th>
</tr>

<?php 
$total=0;
foreach ($pp as $prod) {  // Lire pour chaque elements ($prod) du tableau ($pp)
?>
       
<tr>
        <td><?=$prod['designation']?> </td>
        <td><?=$prod['quantite']?> </td>
        <td><?=$prod['prix_unitaire']?> € </td>
        <td><?=$prod['total_ligne']?> € </td>
</tr>
<?php 
        $total += $prod['total_ligne'];
}
?>
</table>

<h2>Total de votre commande <?= $total ?> € </h2>

</body>
</html>






