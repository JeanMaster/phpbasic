<?php

$cafes = array(
    "capuchino" => 50,
    "latte" => 25,
    "americano" => 20,
);


// esta opcion recorre el array 
foreach ($cafes as $prices) { 
    echo "este cafe cuesta $prices USD \n";
}


echo "\n";
//pero ademas se le puede agrega un subindice , este for each se parece al metodo de array de js pero creo que es diferente sintaxis, quizasm e equivoque

foreach ($cafes as $cafe => $value) {
    echo "este $cafe cuesta $prices USD \n";
}

//tambien puedes  usar break; o continue; break deiene el ciclo y continue se salta un ciclo

//break
echo "\n";
echo "\n";

$orden = readline("que cafe desea ordenar \n");
foreach ($cafes as $cafe => $price) {
    echo "$cafe \n"; //podemos ver que key esta en la iteracion
    if  ($orden == $cafe) {
        echo "el cafe $cafe cuesta $price \n";
        break;  //podemos ver que para el ciclo indifeentemente de que parte va en la iteracion

    }
}

echo "\n";


//continue
$invetario = [
    "capuchino" => 10,
    "latte" => 0,
    "americano" => 0, ];

foreach ($invetario as $producto => $cantidad) {
    if ($cantidad !== 0 ) {
        continue; //aqui se salta del ciclo los productos que si tengan inventario al menos 1kg o unidad
    }

    echo "No hay existencia $producto, recomendamos reponer inventario \n";
}