<?php

function clear() {
    if (PHP_OS == "WINNT") {
        system("cls");
    } else {
        system("clear");
    }
}

// set de palabras

$possible_word = [ "Afganistán", "Albania", "Argelia", "Andorra", "Angola", "Antigua y Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaiyán", "Bahamas", "Bahrein", "Bangladesh", "Barbados", "Belarús", "Bélgica", "Belice", "Benín", "Bhután", "Bolivia", "BosniayHerzegovina", "Botsuana", "Brasil", "Brunéi", "Bulgaria", "BurkinaFaso", "Burundi", "CaboVerde", "Camboya", "Camerún", "Canadá", "Chad", "Chile", "China", "Chipre", "Colombia", "Comoras", "Congo", "Costa Rica", "Croacia", "Cuba", "Dinamarca", "Yibuti", "Dominica", "Ecuador", "Egipto", "ElSalvador", "GuineaEcuatorial", ];


// inicializamos variables

echo "Juego de el Ahorcado por paises: "; 
echo "\n\n";

define("MAX_ATTEMPS",6);

$choosen_word = $possible_word[(rand(0 , count($possible_word) -1 ))];
$choosen_word = strtolower($choosen_word);
$choosen_word_length = strlen($choosen_word);
$discovered_letters = str_pad("", $choosen_word_length , "_"); 
$attemps = 0;

do {
    echo "adivina el pais, es un pais con $choosen_word_length palabras: \n\n" ; 
    echo "Tienes un maximo de intentos de: " . MAX_ATTEMPS . " \n";
    echo "intentos: $attemps \n\n";
    echo $discovered_letters . "\n\n";


    $chooseletter = (string) readline("introduce una palabra: \n");
    $chooseletter = strtolower($chooseletter);

    if (str_contains($choosen_word , $chooseletter)){
        
        $offset = 0;
        while (($letter_position = strpos($choosen_word, $chooseletter , $offset) )!== false) {
        
            $discovered_letters[$letter_position] =  $chooseletter;
            $offset++;
            
        }
    } else {
        clear();
        $attemps++;
        echo "no esta esa letra 😁, te quedan: " . MAX_ATTEMPS - $attemps. " intentos \n";
        sleep(2); 
    };

        clear();

} while ($attemps < MAX_ATTEMPS && $choosen_word != $discovered_letters  );

clear();

if ($choosen_word == $discovered_letters ) {
    echo "felicidades, el pais era $choosen_word lo has logrado.🎆🎉 \n";
} else {

    echo "perdistes, sigue intentando 😉 el pais era $choosen_word \n";
}
