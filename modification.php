<?php 
$objetPdo =new Pdo('mysql:host=localhost;dbname=fast_saver','root','');
$PdoStat =$objetPdo->prepare ('SELECT *FROM employe where id = :num');
$PdoStat->bindValue(':num',$_GET['numemploye'],PDO::PARAM_INT);

$executeisok=$PdoStat->execute();
$employe=$PdoStat->fetch();?>
<html>
    <head>
        <title>MODIFIER</title>
        <meta charset="utf-8">
        <meta name="viewport" content="xidth-device-width,user-scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"
></head>
<body>
    <form method="post" action="modifier.php">
    <fieldset>
<input type="hidden" name="numemploye" value="<?=$employe['id'];?>">
</fieldset>

<fieldset>
        <input type="text" id="nom"name="nom" tabindex="1"  onkeyup="nameValidation ()" value="<?=$employe['nom'];?>">
        <p id="erreurnom" ></p>
      </fieldset>
      <fieldset>
        <input  type="text"id="prenom"name="prenom" tabindex="2" required autofocus onkeyup="prenameValidation ()"value="<?=$employe['prenom'];?>">
        <p id="erreurnom1" ></p>
      </fieldset>
      <fieldset>
        <input id="cin" name="cin" type="text" tabindex="3" required autofocus onkeyup="Cin()" value="<?=$employe['cin'];?>">
        <p id="erreur" ></p>
       </fieldset>
      <fieldset>
        <input id="age" name="age" type="text" tabindex="3" required autofocus onkeyup="Age()"value="<?=$employe['age'];?>">
        <p id="msg" ></p>
      </fieldset>
      <fieldset>
        <input  id="mail" name="mail" type="email" tabindex="4" required value="<?=$employe['mail'];?>">
      </fieldset>
      <fieldset>
        <input  type="tel" id="tel" name="tel" tabindex="5" required onkeyup="Telephone()"value="<?=$employe['tel'];?>"> <p id="msg2" ></p> <p id="msg3" ></p>
      </fieldset>
      <fieldset>
        
        <input type="radio" id="tache" name="tache" value="Mecanicien" checked="checked"value="<?=$employe['tache'];?>">
        <label for="tache">Mecanicien</label><br>
        <input type="radio" id="tache" name="tache" value="Remorqueur"value="<?=$employe['tache'];?>">
        <label for="tache">Remorqueur</label><br>
        <input type="radio" id="dispo" name="dispo" value="disponible" checked="checked"value="<?=$employe['disponabilite'];?>">
        <label for="tache">Disponible</label><br>
        <input type="radio" id="dispo" name="dispo" value="nondisponible"value="<?=$employe['disponabilite'];?>">
        <label for="tache">Non disponible</label><br>
      </fieldset>
      <fieldset>
     

        <input  type="submit" value="Modifier"/>
      </fieldset>
    </form>
    <script src="ajout.js"></script>

    </html>