<!DOCTYPE html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" href="css.css"/>
	</head>
<body>
<?php
try
{
 $bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '');
}
catch (Exception $e)
{
 die('Erreur : ' . $e->getMessage());
}
if(((isset($_POST["nom"]))&& (!empty($_POST["nom"])))
||((isset($_POST["PSR"]))&& (!empty($_POST["PSR"])))
||((isset($_POST["CN"]))&& (!empty($_POST["CN"])))
||((isset($_POST["PX"]))&& (!empty($_POST["PX"])))
||((isset($_POST["NBJ"]))&& (!empty($_POST["NBJ"])))
||((isset($_POST["CMTR"]))&& (!empty($_POST["CMTR"]))))
{
	$nom=$_POST["nom"];echo $_POST["nom"];
	$psr=$_POST["PSR"];echo $_POST["PSR"];
	$cn=$_POST["CN"];echo $_POST["CN"];
	$px=$_POST["PX"];echo $_POST["PX"];
	$nbj=$_POST["NBJ"];echo $_POST["NBJ"];
	$cm=$_POST["CMTR"];echo $_POST["CMTR"];

try{
		$sql="INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max,commentaires) values"."("."'".$nom."'".","."'".$psr."'".","."'".$cn."'".",".$px.",".$nbj.","."'".$cm."'".")";
		//echo $sql."<br>";
		$bdd->query($sql);
		echo"données Ajouter";
}
catch (Exception $e)
{
 die('Erreur : ' . $e->getMessage());
}
}
else
{
echo"Veuillez Remplissez Toutes les Champs!";
}
echo" <br> <a href='pageprincipal.php'> Retourner </a>";
?>
</body>
</html>