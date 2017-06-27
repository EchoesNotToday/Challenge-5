
//Exercice 1 Niveau 2

<?php
    
    //définition des valeurs de notre tableau et création d'un tableau vide
    
    $cuissons = ["à point", "saignant", "bleu", "bien cuit"];
    $viandes = ["poulet", "boeuf", "mouton"];
    
  

function createCommandes($cuissons, $viandes){
    $commandes = [];
    foreach($viandes as $meat){
        foreach($cuissons as $cooking){
           array_push($commandes, $meat." ".$cooking);
         }
    }
    return $commandes;
    }
    print_r(createCommandes($cuissons, $viandes));
?>





//Exercice 3 Niveau 2


<?php

$fruits = ["orange","banane","pomme","fraise","tomate","framboise","noix de coco","ananas"];
$last = []
    for($i=0; $i <count($fruits); $i++){
        for($n=$i-2)
        
    }

$fruits = ["orange","banane","pomme","fraise","tomate","framboise","noix de coco","ananas"];
$last = [];
    for($i=6; $i < 8; $i++){
    //echo $i;
    $last[]=($fruits[$i]); 
        
    }
    print_r($last);

//Exercice 4 Nivceau 2

