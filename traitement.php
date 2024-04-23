<?php

$name=$_FILES["fichier"]["name"];
$fichier="/opt/lampp/htdocs/ifall/fichier/docs/".$name;
$tmp=$_FILES["fichier"]["tmp_name"];
$recherche=$_REQUEST['recherche'];

if(!move_uploaded_file($tmp,$fichier))
    die ("Fichier non déplace");
$fichier=$fichier;
if(!$file=fopen("$fichier", "r"))
    die ("Error opening");
while(!feof($file)){
    $ligne=fgets($file,255);
    if(strpos($ligne, $recherche) !== false)
        $ligne=str_replace($recherche,"<span style = 'color: red; font-size:20px'>".$recherche."</span>",$ligne);
    echo $ligne."<br>";
}
fclose($file);
?>