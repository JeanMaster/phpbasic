<?php


function pokemon_random_choice() {

    $numero_random = rand(1, 4);
    $pokemon = "";

    switch($numero_random) {
        case 1:
            $pokemon= "Pikachu";
            break;
        case 2: 
            $pokemon= "Charmander";
            break;
        case 3: 
            $pokemon= "Snolax";
            break;
        default:
        $pokemon= "no pokemon for now";
    };

    return $pokemon;
};

for ($i=0; $i < 20; $i++) { 
    echo pokemon_random_choice();
    echo "\n";
    
};
