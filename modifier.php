<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=fast_saver','root','');
//on prepare la requete
$pdoStat =$objetPdo->prepare('UPDATE fast_saver.commande set dateCommande=:dateCommande,etat=:etat,nb_produits=:nb_produits,id_facture=:id_facture WHERE idCommande=:num LIMIT 1');

$pdoStat->bindValue(':num',$_POST['numcommande'], PDO::PARAM_INT);
$pdoStat->bindValue(':dateCommande',$_POST['dateCommande'], PDO::PARAM_STR);
$pdoStat->bindValue(':etat',$_POST['etat'], PDO::PARAM_STR);
$pdoStat->bindValue(':nb_produits',$_POST['nb_produits'], PDO::PARAM_STR);
$pdoStat->bindValue(':id_facture',$_POST['id_facture'], PDO::PARAM_STR);
$executeisok=$pdoStat->execute();

if($executeisok)
{$message='la commande a ete mise a jour';
}
else{
    $message ='Echec de la modification';
}?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
</head>
<body>
    <h1>Modification </h1>
    <p><?=$message?></p>
    
</body>
</html>
