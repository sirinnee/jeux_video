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
if (isset($_COOKIE["ID"]))
	{
		$id=$_COOKIE["ID"];
		$reponse = $bdd->query('SELECT * FROM jeux_video');
		$n=0;	
	while ($donnees = $reponse->fetch())
		{
			if($donnees['ID']==$id)
				{$n=$n+1;
				}		
		}
	if($n==0)
		{
		echo"Identificateur Inexistant !";
		}
	else
		{
		$nom=$_POST["nom"];$psr=$_POST["PSR"];$cn=$_POST["CN"];
		$px=$_POST["PX"];$nbj=$_POST["NBJ"];$cm=$_POST["CMTR"];
	$sql="update jeux_video  set nom='".$nom."',possesseur='".$psr."',console='".$cn."',prix='".$px."',nbre_joueurs_max='".$nbj."',commentaires='".$cm."' where ID=".$id."";
	echo $sql;
	$bdd->query($sql);
		}
	echo"Données Mis à jour !";
	setcookie("ID",$_COOKIE["ID"],time()-1);
	}
else
	{
	echo"Veuillez Precisez L'Identificateur !";
	}	
echo" <br> <a href='pageprincipal.php'> Retourner </a>";
?>
</body>
</html>