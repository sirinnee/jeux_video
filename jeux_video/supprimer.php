<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
	<link rel="stylesheet" media="screen" type="text/css" href="css.css"/>
  </head>
<body>
<fieldset id="pr">
	<legend> <i>Jeux Videos</i></legend>
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
$sql="delete from jeux_video where ID='".$s."'";
$n=0;	
while ($donnees = $reponse->fetch())
{ if($donnees['ID']==$s)
	{$n=$n+1; 
}}
if($n==0)
{
	echo"Identificateur Inexistant !";
}
else
{	//$reponse= $bdd->query('SELECT * FROM jeux_video where possesseur="Michel"');
		$bdd->query($sql);
		echo"données effacer";
}
setcookie("ID",$_COOKIE["ID"],time()-1);
}
else
{
echo"Veuillez Precisez L'Identificateur !";
}
?>
</fieldset>
<?php
echo" <br> <a href='pageprincipal.php'> Retourner </a>";
?>
</body>
</html>