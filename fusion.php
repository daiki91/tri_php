<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    </style>
</head>

    <?php

       /* function fusionner($tab,$debut,$milieu,$fin){
            $j=$debut;$k=$milieu+1;
	        for ($i = $debut; $i <= $fin; ++$i) {
		        if(($tab[$j]<=$tab[$k] && $j<= $milieu) || $k>$fin ) {
			        $T[$i]=$tab[$j++];
		        }
		        else if(($tab[$j]>$tab[$k] && $k<=$fin) || $j>$milieu){
			        $T[$i]=$tab[$k++];
		        }
	        }
	        return $T;
        }

        function  diviser(&$tab,$debut,$fin){
            if ($debut<$fin) {
                $milieu=(int)(($debut+$fin)/2);
                diviser($tab,$debut,$milieu);
                diviser($tab,$milieu+1,$fin);
                fusionner($tab,$debut,$milieu,$fin);
            }
        }

        function afficher($tab){
            for ($i=0; $i <count($tab) ; $i++) { 
                echo "$tab[$i].<\t>";
            }
          $t=array(0,4,6,1,3,-2,1);
        afficher($t);
        echo"<br>";
        $t=diviser($t,0,(count($t)-1));
        echo"le tableau trier est :";
        echo"<br>";
        afficher($t);
        }*/
        function insertion(&$tab){
            for ($i=1; $i < count($tab) ; $i++) { 
                $val=$tab[$i];
                for($j=$i;$j>0 && $tab[$j-1]>$val;$j--){
                    $tab[$j]=$tab[$j-1];
                }
                $tab[$j]=$val;
            }
        }
        function afficher($tab){
            for ($i=0; $i<count($tab) ; $i++) { 
                echo "$tab[$i].<\t>";
            }
        }
        $t=array(0,4,6,1,3,-2,1);
        afficher($t);
        echo"<br>";
        insertion($t);
        echo"le tableau trier est";
        echo"<br>";
        afficher($t);
      
    ?>
    <body>
    </br>
</br> 
</br> 
<a href="./presentation_algo_tri.html#fusions"> &lArr; Retour a la Page de Description</a> 
<p align="right"><a href="./index.html"> &rArr; Retour au Sommaire</a></p>
</body>
</html>