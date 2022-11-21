<?php
$conn=mysqli_connect('localhost','root','','fast_saver') or die(mysqli_error());

$req="SELECT * FROM  fast_saver.employe"; 
$res=mysqli_query($conn,$req);
?>
<!DOCTYPE html>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
<html>
    <body>
 <table border="2" align="center" width="50%">
 <tr>
    <th><p style="color:green">Id</p></th>
    <th><p style="color:green">Nom</p></th>
    <th><p style="color:green">Prenom</p></th>
    <th><p style="color:green">Cin</p></th>
    <th><p style="color:green">Age</p></th>
    <th><p style="color:green">Mail</p></th>
    <th><p style="color:green">Tel</p></th>
    <th><p style="color:green">Tache</p></th>
    <th><p style="color:green">Disponabilite</p></th>
    <th><p style="color:green">DELETE</p></th>
    <th><p style="color:green">UPDATE</p></th>


  </tr>
<?php while ($employe=mysqli_fetch_assoc($res)) 
{ 
    ?>
<tr>
    <td><?php echo($employe['id'])?> </td>
    <td><?php echo($employe['nom'])?></td>
    <td><?php echo($employe['prenom'])?></td>
    <td><?php echo($employe['cin'])?></td>
    <td><?php echo($employe['age'])?></td>
    <td><?php echo($employe['mail'])?></td>
    <td><?php echo($employe['tel'])?></td>
    <td><?php echo($employe['tache'])?></td>
    <td><?php echo($employe['disponabilite'])?></td>
   <td><a href="supprimer.php?numemploye=<?= $employe['id']?>"><p style="color:red">DELETE</p></a></td>
   <td><a href="modification.php?numemploye=<?= $employe['id']?>"><p style="color:red">UPDATE</p></a></td>

</tr>  
<?php }?>


</table>
</body>
</html>