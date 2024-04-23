
<!DOCTYPE html>
<html>
<head>
	<title>Résultats de recherche</title>
</head>
<body bgcolor="lightblue">
	<p align="center"><a href="./index.html"> &lArr; Retour au Sommaire</a></p>
	<h1 align="center">Résultats de recherche</h1>
	<?php
	if(isset($_POST['motif']) && isset($_FILES['fichier'])){
		$motif = $_POST['motif'];
		$fichier = $_FILES['fichier']['tmp_name'];

		// Lecture du contenu du fichier
		$contenu = file_get_contents($fichier);
		$contenu = htmlspecialchars($contenu);

		// Recherche du motif
		$contenu = preg_replace('/('.preg_quote($motif).')/i', '<strong style="color: red">$1</strong>', $contenu);

		// Affichage du contenu avec les occurrences du motif en gras
		echo '<pre align="center">'.$contenu.'</pre>';
	}
	else{
		echo '<p>Une erreur est survenue, veuillez réessayer.</p>';
	}
	?>
	<p align="center"><a href="appliquette.php"> &lArr; Chercher un autre motif</a></p>
</body>
</html>