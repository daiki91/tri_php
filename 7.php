
    <?php
        $login=$_POST['login'];
        $motdepasse=$_POST['motdepasse'];
        
        if($_POST['motdepasse']=='' || $_POST['login']=='')  {
            echo "<h1>Oops..  </h1> ";
            echo "<b>Erreur:</b> Veuillez renseigner tous les champs ! ";
            echo "<br><a href=./7form.php?motdepasse=$motdepasse&login=$login>&lArr;Retour au Formulaire</a>";
        }
        else if($_POST['motdepasse']=!'' && $_POST['login']=!'') {
            echo "Inscription réussie, $login !";
        }
         
?>
