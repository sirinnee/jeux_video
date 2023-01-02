<!DOCTYPE html>
<head >
<meta charset="utf-8" />
<link rel="stylesheet" media="screen" type="text/css" href="css.css"/>
</head>
<body>
<fieldset id="pr">
<legend> <i>Jeux Videos</i></legend>
<fieldset id="main">
<legend> <i>TraiTemenTs</i></legend>
	<form action="modifier.php" method="post">
		 
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
	<table> 
	<?php
$n=0;	
while ($donnees = $reponse->fetch())
{ if($donnees['ID']==$s)
	{$n=$n+1;
	?>	
	<h1>ID :<?php echo $donnees['ID'] ?></h1>
	Nom: 
	<input type="text"name="nom" pattern="[a-zA-Z]{1,}" required value=" <?php echo $donnees['nom'] ?>">
	Possesseur:
	<input type="text"name="PSR" pattern="[a-zA-Z]{1,}" value="<?php echo $donnees['possesseur'] ?>">
	Console:
	<input type="text"name="CN" pattern="[a-zA-Z]{1,}" value="<?php echo $donnees['console'] ?>">
	Prix:
	<input type="text" name="PX" pattern="[0-9]{1,}" value="<?php echo $donnees['prix'] ?>">
	Nombre De Joueurs:
	<input type="text"name="NBJ" pattern="[0-9]{1,}" value="<?php echo $donnees['nbre_joueurs_max'] ?>">
	Commentaires:
	<input type="text" name="CMTR" value="<?php echo $donnees['commentaires'] ?>">
	<input type="submit"  id="s" value="Valider"/>
	<?php 
}}
if($n==0)
{
	echo"Identificateur Inexistant !";
}
?>
</table>
<?php
}

?>		
	</form>
</fieldset>
<?php
echo" <br> <a href='pageprincipal.php'> Retourner </a>";
?>
</fieldset>
</body>
</html>