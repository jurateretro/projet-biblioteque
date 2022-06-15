<?php

// projet de bibliotheque
include_once('Livre.php');
include_once('Auteur.php');


$king = new Auteur( "KING", "STEPHEN", "21-09-1947");
$tolkien = new Auteur( "TOLKIEN", "JRR", "03-01-1892");
$london = new Auteur( "London", "Jack", "21-09-1887");

$ca = new Livre($king,"ca",1138,1986,20,);
$simetierre = new Livre($king,"simetierre",374,1983,15,);
$fleau = new Livre($king,"fleau",823,1978,14,);
$shining = new Livre($king,"shining",447,1977,16,);
$lotr = new Livre($tolkien,"seigneurdesanneaux",736,1954,8,);


 

//var_dump($king);
// 

 //$livre2-> setTitre("Bidule");
 //var_dump($livre2);
 //echo $livre2;
 echo $king->calculerAge();
echo $king->afficherLivres();
echo $tolkien->afficherLivres();

 
