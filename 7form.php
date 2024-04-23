<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./7form.css">
    <title>Formulaire V$ | TP php</title>
    
</head>
<body>
    <h1>Formulaire d'Inscription</h1>
    <fieldset>
        <legend>Inscription</legend>
        <form method="post" action="7.php">
            <label for="name">Pseudo</label><br>
            <input id="name" name="login"  type="text"   
            value="<?= isset($_GET['login']) ? $_GET['login'] : '' ?>"><br>
            <label for="mdp">Mot de passe</label><br>
            <input id="mdp" type="password" name="motdepasse" value="<?= isset($_GET['motdepasse']) ? $_GET['motdepasse'] : '' ?>" ><br><br>
            <input id="nojoke" type="submit" value="S'inscrire">         
        </form>       
    </fieldset><br>
    <p><a href="./index.html"> &lArr; Retour au Sommaire</a></p>

</body>
</html>