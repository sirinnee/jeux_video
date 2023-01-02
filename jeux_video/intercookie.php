<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
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
	if((isset($_POST["IDE"]))&& (!empty($_POST["IDE"])))
	{
		setcookie("ID",$_POST["IDE"],time()+12800);
			switch ($_POST["btn"])
			{
				case "Rechercher":header("Location:rechercher1.php"); break;
				case "Modifier":header("Location:formulaire_de_modification.php");break;
				case "Supprimer":header("Location:supprimer.php");break;
			}	
	}
	else
	{
	echo"Veuillez Choisir L'Ideintificateur!";
	}
	echo" <br> <a href='pageprincipal.php'> Retourner </a>";
?>
</body>
</html>