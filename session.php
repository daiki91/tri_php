<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session | TP php</title>
    <style>
        body{
            background-color: beige;
        }
        h1{
            color: greebisque;
        }
    </style>
</head>
<body>
    <h1>Nombres de visites</h1>

<?php

session_start();

$temps_stationnement=100;

if (isset($_SESSION['visite'])) {
    $duree_session = time() - $_SESSION['visite'];

    if ($duree_session < $temps_stationnement) {
        echo "Votre temps est écoulé !";
    }
    
  
}

if (!isset($_SESSION["compteur_visites"])) {
    $_SESSION["compteur_visites"] = 1;
} else {
    $_SESSION["compteur_visites"]++;
}

echo "Le nombre de visites est de ".$_SESSION["compteur_visites"].".";

?>
<br>
<a href="./index.html"> &lArr; Retour au Sommaire</a>
</body>
</html>