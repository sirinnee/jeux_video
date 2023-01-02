<!DOCTYPE html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" href="css.css"/>
	</head>
<body>
<fieldset id="pr">
<legend> <i>Jeux Videos</i></legend>
 <fieldset id="main">
  <legend> Les Informations </legend>
<?php
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '');
}
catch (Exception $e)
{
 die('Erreur : ' . $e->getMessage());
}
if (isset($_COOKIE["ID"]))
{
$s=$_COOKIE["ID"];
$reponse = $bdd->query('SELECT * FROM jeux_video');
?>
	
	
	<?php
$n=0;	
while ($donnees = $reponse->fetch())
{ if($donnees['ID']==$s)
	{$n=$n+1;
	?>	
	<table class="content-box">
			<tr>
			<td>ID</td>
			<td><?php echo $donnees['ID'] ?></td>
			</tr>
			<tr>
			<td>Nom</td>
			<td><?php echo $donnees['nom'] ?></td>
			</tr>
			<tr>
			<td>Possesseur</td>
			<td><?php echo $donnees['possesseur'] ?></td>
			</tr>
			<tr>
			<td>Console</td>
			<td><?php echo $donnees['console'] ?></td>
			</tr>
			<tr>
			<td>Prix </td>
			<td><?php echo $donnees['prix'] ?></td>
			</tr>
			<td> Nombre De Joueurs</td>
			<td><?php echo $donnees['nbre_joueurs_max'] ?></td>
			</tr>
			<tr>
			<td> Commentaires</td>
			<td><?php echo $donnees['commentaires'] ?></td>
			</tr>
	</table>
	<?php 
}}
if($n==0)
{
	echo"Identificateur Inexistant !";
}
?>
</table> </fieldset>
<?php
//setcookie("ID",$_COOKIE["ID"],time()-1);
}
else
{
echo"Veuillez Precisez L'Identificateur !";
}
?>
<?php
echo" <br> <a href='pageprincipal.php'> Retourner </a>";
?>
</fieldset>

</body>
</html>