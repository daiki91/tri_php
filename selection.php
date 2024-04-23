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

<body>
</body>
    <?php

        function selection(&$tab){
            for($i=0;$i<count($tab)-1;$i++){
                $min=$i;
                for($j=$i+1;$j<count($tab);$j++){
                    if($tab[$j] < $tab[$min])
                        $min=$j;
                }
                $tmp=$tab[$i];
                $tab[$i]=$tab[$min]; 
                $tab[$min]=$tmp;
            }
        }

        function afficher($tab){
            for ($i=0; $i <count($tab) ; $i++) { 
                echo "$tab[$i]<\t>";
            }
        }
        $t=array(0,4,6,1,3,-2,1);
        afficher($t);
        echo"<br>";
        selection($t);
        echo"le tableau trier est :";
        echo "<br>";
        afficher($t);      
    ?>


</br>
</br> 
</br> 
<a href="./presentation_algo_tri.html#selections"> &lArr; Retour a la Page de Description</a> 
<p align="right"><a href="./index.html"> &rArr; Retour au Sommaire</a></p>
</body>
</html>