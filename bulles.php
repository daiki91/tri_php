<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr{
            border:  1px solid black;
        }
    </style>
</head>
<body>
<table  border="1" cellpadding="0">
    <?php 

        function bulle(&$tab){
            $ordre=true;
            $passage=0;
            while($ordre){
                $ordre=false;
                $passage++;
                for($i=0;$i<count($tab)-$passage;$i++){
                    if($tab[$i]>$tab[$i+1]){
                        $tmp=$tab[$i];
                        $tab[$i]=$tab[$i+1];
                        $tab[$i+1]=$tmp;
                        $ordre=true;
                    }
                }
            }
        }?>
        <?php
        function afficher($tab){
            for ($i=0; $i <count($tab) ; $i++) { 
                echo "<tr><td> $tab[$i].</td></tr>";
            }
        }
        ?>
        </table>
        <?php
        $t=array(0,4,6,1,3,-2,1);
        afficher($t);
        echo"<br>";
        bulle($t);
        echo"le tableau triee est :";
        echo"<br>";
        afficher($t);
    ?>
    </br>
</br> 
</br> 
<a href="./presentation_algo_tri.html#bulles"> &lArr; Retour a la Page de Description</a> 
<p align="right"><a href="./index.html"> &rArr; Retour au Sommaire</a></p>
</body>
</html>