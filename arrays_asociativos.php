<?php

$estudiantes = array(
    "carlos" =>  18,
    "jose" => 19,
    "juan" => 35,
    "maria" => 27,   

);


//tabien se puede 

$profesores = [
    "juana" => 23,
    "rodrigo" => 28,
    "lorenzo" => 65,
];

print_r($estudiantes);
echo "\n \n";
print_r($profesores);
echo "\n \n";

echo $estudiantes["carlos"];
echo "\n \n";
echo $profesores["juana"];
echo "\n \n";

//cafe

$cafes = array(
    "capuchino" => 50,
    "latte" => 25,
    "americano" => 20,
);

echo "el precio del cafe latte es de {$cafes["americano"]} ";

echo "\n \n";   

//arreglos de mas niveles

$personas = array(
    "carlos" => array(
        "edad" => 20,
        "profecion" => "desarollador",
    ),
    "juanita" => array(
        "edad" => 20,
        "profecion" => "maestra",
    ),
);

echo "\n \n"; 

print_r($personas);

echo "\n \n"; 

echo "la edad de juanita es: {$personas["juanita"]["edad"]} y su profesion es de  {$personas["juanita"]["profecion"]} ";

echo "\n \n"; 