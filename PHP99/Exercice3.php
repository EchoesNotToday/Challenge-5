<?php 

//Exercice 3 Niveau 2

$fruits = ["orange","banane","pomme","fraise","tomate","framboise","noix de coco","ananas"];
function last2($fruits){
    $last = [];
    
    for($i=6; $i <= 7; $i++){
    array_push($last,$fruits[$i]);
    //$last[]=($fruits[$i]);
    
        
    }
    return $last;
}
    print_r(last2($fruits));