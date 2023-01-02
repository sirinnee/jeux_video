<?php
	try
		{
		$bdd = new PDO('mysql:host=localhost;dbname=test2;charset=utf8', 'root', '');
		}
	catch (Exception $e)
		{
		die('Erreur : ' . $e->getMessage());
		}
	$reponse = $bdd->query('SELECT * FROM jeux_video order by id ');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
	<link rel="stylesheet" media="screen" type="text/css" href="css.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
<body>
<fieldset id="pr">
	<legend> <i>Jeux Videos</i></legend>
		<table class="content-box"> 
			<thead> 
				<tr>
					<th> ID </th>
					<th> Nom </th>
					<th> Possesseur </th>
					<th> Prix </th>
					<th> Console </th>
					<th> Nombre De Joueurs </th>
					<th> Commentaires </th>
				</tr>
			</thead>
<?php
while ($donnees = $reponse->fetch())
{
?>	
			<tbody>
				<tr>
					<td> <?php echo $donnees['ID'] ?> </td>
					<td><?php echo  $donnees['nom'] ?> </td>
					<td><?php echo  $donnees['possesseur'] ?> </td>
					<td><?php echo  $donnees['prix'] ?> </td>
					<td><?php echo  $donnees['console'] ?> </td>
					<td><?php echo  $donnees['nbre_joueurs_max'] ?> </td>
					<td><?php echo  $donnees['commentaires'] ?> </td>
				</tr>
			</tbody>
<?php 
}
?>
	</table>
<?php
	echo" <br> <a href='pageprincipal.php'> Retourner </a>";
?>
</fieldset>
</body>
</html>