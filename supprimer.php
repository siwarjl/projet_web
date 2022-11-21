<?php
$objetPdo =new PDO ('mysql:host=localhost;dbname=fast_saver','root','');
$pdoStat=$objetPdo ->prepare('DELETE FROM employe WHERE id=:num LIMIT 1');
$pdoStat->bindValue(':num',$_GET['numemploye'],PDO::PARAM_INT);
//execution de la requete
$executeisok=$pdoStat->execute();
if($executeisok)
{$message='le contact a ete supprime';
}
else{
    $message ='Echec de la supression';
}?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport">
</head>
<body>
    <h1>Suppression</h1>
    <p><?=$message?></p>
    
</body>
</html>
        