<?php
$conn=mysqli_connect('localhost','root','','fast_saver') or die(mysqli_error());
$NOM=$_POST['nom'];
$PRENOM=$_POST['prenom'];
$CIN=$_POST['cin'];
$AGE=$_POST['age'];
$MAIL=$_POST['mail'];
$TEL=$_POST['tel'];
$TACHE=$_POST['tache'];
$DISPO=$_POST['dispo'];

$req="INSERT INTO employe (nom,prenom,cin,age,mail,tel,tache,disponabilite) values ('$NOM','$PRENOM',$CIN,$AGE,'$MAIL',$TEL,'$TACHE','$DISPO')";
$res=mysqli_query($conn,$req);
?>
<!DOCTYPE html>
<head>
<style>


h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

p {
  text-indent: 50px;
  text-align: center;
  letter-spacing: 3px;
}


</style>
</head>
<body>

<div>
  <h1>L'ajout est fait!</h1>
  </div>

  <p>
  <a target="_blank" href="utilities-color.html">"Ajouter un autre employe"</a> </p>
  <p>
  <a target="_blank" href="afficher.php">"Voir liste employe"</a> </p>

</body>
</html>




