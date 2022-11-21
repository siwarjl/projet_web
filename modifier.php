<?php
$objetPdo = new PDO('mysql:host=localhost;dbname=fast_saver','root','');
//on prepare la requete
$pdoStat =$objetPdo->prepare('UPDATE employe set nom=:nom,prenom=:prenom,cin=:cin,age=:age,tel=:tel,mail=:mail,tel=:tel,tache=:tache,disponabilite=:disponabilite WHERE id=:num LIMIT 1');
$pdoStat->bindValue(':num',$_POST['numemploye'], PDO::PARAM_INT);
$pdoStat->bindValue(':nom',$_POST['nom'], PDO::PARAM_STR);
$pdoStat->bindValue(':prenom',$_POST['prenom'], PDO::PARAM_STR);
$pdoStat->bindValue(':cin',$_POST['cin'], PDO::PARAM_INT);
$pdoStat->bindValue(':age',$_POST['age'], PDO::PARAM_INT);
$pdoStat->bindValue(':mail',$_POST['mail'], PDO::PARAM_STR);
$pdoStat->bindValue(':tel',$_POST['tel'], PDO::PARAM_INT);
$pdoStat->bindValue(':tache',$_POST['tache'], PDO::PARAM_STR);
$pdoStat->bindValue(':disponabilite',$_POST['dispo'], PDO::PARAM_STR);


$executeisok=$pdoStat->execute();
if($executeisok)
{$message='le contact a ete modifie';
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
