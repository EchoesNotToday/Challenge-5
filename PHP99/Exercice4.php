<?php
//Exercice 4 Niveau 2
//définition du tableau
$prenoms = ["Harry","Hilary", "Harrington", "Hagrid","Holmes"];

function voidmid($prenoms){
    for($i=0; $i < count($prenoms)/3; $i++){//calcule jusqu'où $i doit s'arrêter
    }
    unset($prenoms[$i]); //destruction de la variable où $i s'est arrêté
    return $prenoms;
}
print_r(voidmid($prenoms));//affichage du résultat