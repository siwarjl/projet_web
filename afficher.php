<?php
$conn=mysqli_connect('localhost','root','','fast_saver') or die(mysqli_error());

$req="SELECT * FROM  fast_saver.commande"; 
$res=mysqli_query($conn,$req);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>UK punk bands</title>
    <link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
    <link href="../View/style.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <table>
      <thead>
      <CENTER><TABLE width=60% border=6>
        <tr>
          <th scope="col">id Commande</th>
          <th scope="col">Date Commande</th>
          <th scope="col">Etat Commande</th>
          <th scope="col">Nombre Produits</th>
          <th scope="col">id Facture</th>
          <th scope="col">Supprimer</th>
          <th scope="col">Modifier</th>



        </tr>
      </thead>
     
      <?php while ($commande=mysqli_fetch_assoc($res)) 
{ 
    ?>
<tr>
    <td><?php echo($commande['idCommande'])?> </td>
    <td><?php echo($commande['dateCommande'])?></td>
    <td><?php echo($commande['etat'])?></td>
    <td><?php echo($commande['nb_produits'])?></td>
    <td><?php echo($commande['id_facture'])?></td>
   <td><a href="supprimercommande.php?numcommande=<?= $commande['idCommande']?>"><p style="color:white">Supprimer</p></a></td>
   <td><a href="modification.php?numcommande=<?= $commande['idCommande']?>"><p style="color:white">Modifier</p></a></td>

</tr>  
<?php }?>
    </table>
  </body>
</html>