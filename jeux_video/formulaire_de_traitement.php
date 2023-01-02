<!DOCTYPE html>
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" media="screen" type="text/css" href="css.css"/>
	</head>
<body>
<fieldset id="pr">
<legend> <i>Jeux Videos</i></legend>
	<fieldset id="main" >
		<div >
			<div id="menu">
				<form action="intercookie.php" method="post">
					<label> Identificateur:</label> <br>
					<input type="text"  pattern="[0-9]{1,}" required name="IDE"/><br>
						<input type="submit"   id ="s" name="btn" value="Rechercher"/>
						<input type="submit" id ="s" name="btn"   value="Modifier"/>
						<input type="submit"  id ="s" name="btn"  value="Supprimer"/>
						</form>
		    </div>
		</div>
	</fieldset>
	<?php
echo" <br> <a href='pageprincipal.php'> Retourner </a>";
?>
</fieldset>
</body>
</html>