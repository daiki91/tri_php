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
        function shaker(&$tab){
            $i=0;
            $sens=1;
            $debut=1;
            $fin=count($tab)-1;
            do{
                $permutation=false;
                while(($sens==1 && $i<$fin) || ($sens==-1 && $i>$debut)){
                    $i+=$sens;
                    if($tab[$i]<$tab[$i-1]){
                        $temp=$tab[$i];
                        $tab[$i]= $tab[$i-1];
                        $tab[$i-1]= $temp;
                        $permutation=true;
                    }
                }
                if($sens==1)
                    $fin--;
                else 
                    $debut++;
                $sens=-$sens;
            }while($permutation);

        }

        function afficher($tab){
            for ($i=0; $i <count($tab) ; $i++) { 
                echo "$tab[$i]"."<\t>";
            }
        }
        $t=array(0,4,6,1,3,-2,1);
        echo"<br>";
        afficher($t);
        echo"<br>";
        shaker($t);
        echo"le tableau triee est :";
        echo"<br>";
        afficher($t);
    ?>
    <body>
</br>
</br> 
</br>
<a href="./presentation_algo_tri.html#cocktail"> &lArr; Retour a la Page de Description</a> 
<p align="right"><a href="./index.html"> &rArr; Retour au Sommaire</a></p>
</body>
</html>