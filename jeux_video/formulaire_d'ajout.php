<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
	<link rel="stylesheet" media="screen" type="text/css" href="css.css"/>
  </head>
  <body>
  <fieldset id="pr">
<legend> <i>Jeux Videos</i></legend>
<fieldset id="main">
		<legend> <i>AjouTer</i></legend>
		<form action="ajouter.php" method="post">
               Nom De Jeux :<input type="text"  pattern="[a-zA-Z]{1,}" required name="nom">
                Posseusseur :<input type="text" pattern="[a-zA-Z]{1,}" required name="PSR">
                Console :<input type="text" pattern="[a-zA-Z]{1,}" required name="CN">
                Prix :<input type="text"  pattern="[0-9]{1,}" required name="PX">
                Nombre De Joueurs :<input type="text"  pattern="[0-9]{1,}" required name="NBJ">
                Commentaires :<input type="text" pattern="[a-zA-Z]{1,}" required name="CMTR" rows="3">
			<input type="submit" id="s" value="Ajouter"  class="btn btn-success btn-sm"/>	
		</form>
	</fieldset>
	<?php
echo" <br> <a href='pageprincipal.php'> Retourner </a>";
?>
	</fieldset>
	</body>
	</html>