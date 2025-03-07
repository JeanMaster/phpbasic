<?php 

function pokemon_random_choice() {

    $numero_random = rand(1, 5);

    switch($numero_random) {
        case 1:
            echo "Pikachu";
            break;
        case 2: 
            echo "Charmander";
            break;
        case 3: 
            echo "Snolax";
            break;
        default:
        echo "no pokemon for now";
    };
};

for ($i=0; $i < 20; $i++) { 
    pokemon_random_choice();
    echo "\n";
    
};
