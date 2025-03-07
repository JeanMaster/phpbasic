<?php 

function es_estudiante_legend($platzi_rank)  {
    if ($platzi_rank >= 20000  ) {
        echo "Eres un estudiante legendario \n";
    } else {
        echo "Sorry bro, te falta puntos  \n";
    }   
};

// $platzi_rank_user = (int) readline("introduce tu Platzi Rank: \n");

// es_estudiante_legend($platzi_rank_user);


//VALORES POR DEFECTO


function suma($a = 0, $b = 0){
    echo "la suma de $a + $b = " . $a + $b . "\n";
};

// suma(5, 3);
// suma();

//spread operator igual que en js

$arreglo1 = [1, 2 ,3 ];
$arreglo2= [4,5,6];

$resultado = [...$arreglo1, ...$arreglo2];  


//array empaqumen o como se pronuncie. 

$numeros = [5,5];

suma(...$numeros);

// usando spread operator para params.

function sumaInfinita(...$params) {
    $suma = 0;
    foreach ($params as $numero) {
        $suma += $numero;
    };

    echo " la suma infinita es $suma \n";
};

sumaInfinita(...$numeros);