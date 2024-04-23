<!DOCTYPE html>
<html>
<head>
	<title>GetWord | TP php </title>
	<link rel="stylesheet" href="./appliquette.css">
</head>
<body>
	<h1>Chercher un motif dans un fichier</h1>
	<fieldset>
		<legend>GetWord</legend>
		<form method="POST" action="search.php" enctype="multipart/form-data">
		<label for="fichier">Sélectionnez un fichier :</label>
		<input  type="file" id="fichier" name="fichier" required><br>
		<label for="motif">Entrez un motif :</label>
		<input type="text" id="motif" name="motif" required><br><br>
		<input id="button" type="submit" value="Chercher">
	</form>
	</fieldset><br>
	<p><a href="./index.html"> &lArr; Retour au Sommaire</a>
</p>
</body>
</html>





