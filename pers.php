

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion à Mysql</title>
    <link rel="stylesheet" href="personne.css">
    <style>

    </style>
</head>
<body>
    <H1>Requete sur la table personne</H1>
    </br>
</br> 
</br> 
<a href="compteur.php">Acceuil</a>
</body>
</html>
<?php
Require("Connect.php");
$connexion = mysqli_connect(serveur, user, passwd,bdd);
If(!$connexion) { echo "Désolé, connexion à ".serveur."impossible\n";exit;}
If (!mysqli_select_db( $connexion, bdd )) 
{ echo "désolé…\n";exit;}
$resultat = mysqli_query ( $connexion,"SELECT * FROM personne");
if ($resultat){
While ($pers=mysqli_fetch_object($resultat)){ 
Echo "$pers->id, $pers->nom, $pers->prenom<BR>\n";}} else {
Echo "<B>erreur dans l'exécution de requête</B><BR>\n";
Echo "msg de sql:" . Mysqli_error($connexion);}
?>