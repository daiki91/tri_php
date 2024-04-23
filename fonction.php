<html>
<head><title>Régénération formulaire</title></head>
<style>
	td.error{
		color: wheat;
		background: red;
		font-weight: 900;
    }

</style>
<body>

<?php 

	function formulaire($nom,$age,$erN,$erA){ ?>
		<form method="post" action="">
			<tabe>
				<tr>
					<td>Nom</td>
					<td> <input type="text" name="nom" value=<?php echo $nom ?> > </td>
					<td class="error"><?php echo $erN ?> </td>
				</tr>
				<tr>
					<td>Age</td>
                    <td> <input type="text" name="age" value=<?php echo $age?> > </td>
                    <td class="error"><?php echo $erA?> </td>
				</tr>
				<tr>
					<td colspan="3"><input type="submit" value="ok"></td>
				</tr>
			</tabe>
			
		</form>

	<?php } 
	function traitement($n,$a){
		$er1="le champs nom ne doit pas etre vide";
		$er2="l'age doit etre supérieur à 18ans";
		if(empty($n) && $a<18)
			formulaire($n,$a,$er1,$er2);
		else if(empty($n) && $a>=18) 
			formulaire($n,$a,$er1,"");
		else if ($a<18 && !empty($n))
			formulaire($n,$a,"",$er2);
		else if(!empty($n) && $a>=18)
			echo "Bonjour ".$n." vous  avez ".$a."";
	}

		
	if(!isset($_REQUEST["nom"]))
		formulaire("","","","");
	
	else 	
		traitement($_REQUEST["nom"],$_REQUEST["age"]);

?>
</br>
</br> 
</br> 
<a href="compteur.php">Acceuil</a>
</body>
</html>


