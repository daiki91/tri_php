<?php
Require('Connect.php');
$nom=$_REQUEST['nom'];

//$nom=$_POST['nom'];
$requete="SELECT * FROM personne WHERE nom LIKE '$nom'";
//$user = "root";
//$bdd ="php_tp";
//$passwd = "";
$connexion=mysqli_connect("localhost","root" , "","php_tp");
mysqli_select_db( $connexion,bdd);
$resultat=mysqli_query( $connexion,$requete);
if ($resultat){
While ($pers=mysqli_fetch_object($resultat)){ 
Echo "$pers->id, $pers->nom, $pers->prenom<BR>\n";}} 
if(mysqli_num_rows($resultat)==0){
    echo"aucun resultat trouvé";
}
else {
Echo "<B>erreur dans l'exécution de requête</B><BR>\n";
Echo "msg de sql:" . Mysqli_error($connexion);}
?>