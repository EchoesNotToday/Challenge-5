<?php
//Exercice 2 Niveau 1    
    //définition des valeurs de notre tableau
    $genres = "horreur fantastique action western thriller comédie drame romance historique";
    function split($genres){
        $split = explode(" ", $genres);
        
        return $split;
    }
   print_r(split($genres));
?>
