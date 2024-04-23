<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background-image: url('./data_bg.jpg');
    background-attachment: fixed;
    text-align: center;
    font-size: 30px;
}
h3,ul,li
{
    text-align: justify;
}
h1,p,a{
    text-decoration: underline;
    color: beige;
}
table{
    color: greenyellow;
    border: green double
}


    </style>
</head>
<body>
    <h1>Affichage Base de Donnée</h1>

<table align="center" border="1" cellpadding="0" cellspacing="0">
<tr>
<th>Code</th>
<th>URL</th>
<th>Nom</th>
<th>Description</th>
</tr>
<?php
// Déclaration des paramètres de connexion
$host = "localhost";
// Généralement la machine est localhost
// c'est-a-dire la machine sur laquelle le script est hébergé
$user = "root";
$bdd ="messites";
$passwd = "AKJB2002";
// Connexion au serveur
$connect = mysqli_connect($host, $user,$passwd,$bdd) or die("erreur de connexion au serveur");
mysqli_select_db($connect, $bdd) or die("erreur de connexion a la base de donnees");
// Creation et envoi de la requete
$query = "SELECT * from site";
$result = mysqli_query($connect,$query);
// Recuperation des resultats
while($row = mysqli_fetch_row($result)){
$code = $row[0];
$url = $row[1];
$nom = $row[2];
$description= $row[3];
echo "<tr>\n
<td>$code</td>\n
<td>$url</td>\n
<td>$nom</td>\n
<td>$description</td>\n
</tr>\n";
}
//Deconnexion de la base de donnees
mysqli_close($connect);
?>
</tr>
</table>

</br>
</br> 
</br> 
<p><a href="./index.html"> &lArr; Retour au Sommaire</a></p>
OrekiCSS&copy;2020
DaikiBack&copy;2023
</body>
</html>