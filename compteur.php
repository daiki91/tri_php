<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
    background-image: url("photo.svg");
    background-attachment: fixed;
    text-align: center;
    font-size: 30px;
    color: white;
}
h3,ul,li
{
    text-align: justify;
}


    </style>
</head>
<body>
    <?php
    define("MAX",10);
    if(!isset($_SESSION["c"])){
        $_SESSION["c"]=1; 
        $_SESSION["t"]=time();
    }
    else{
        $_SESSION["c"]++;
        if(time()-$_SESSION["t"]<MAX )  
            $_SESSION["t"]=time();
        else{
            session_destroy(); 
            die("Trop tard");
        }
    }
    echo "vous etes venus ". $_SESSION["c"]." fois";
    ?>
    
</br>
    <form action="compteur.php" method="$_POST" >
    <input type="submit" value="continuer">
    </form>
    </br>
    <h2>VOICI LA LISTES DES TRAVAUX ACCOMPLIS : </h2><br>
    <h3>Les TRIS</h3>
    <ul>
        <li><a href="bulles.php">Bulle</a></li>
        <li><a href="cocktail.php">Cocktail</a></li>
        <li><a href="fu.php">fu</a></li>
        <li><a href="fusion.php">fusion</a></li>
        <li><a href="insertion.php">insertion</a></li>
</ul>    
        <h3><a href="myform.html">Formulaire de recherche</a></h3>
        <h3><a href="fonction.php">Regeneraton formulaire</a></h3>
        <h3><a href="bulles.php">bulle</a></h3>
        <h3><a href="bulles.php">bulle</a></h3>
        
    
</br>
</br> 
</br> 
<a href="compteur.php">Acceuil</a>
</body>
</html>