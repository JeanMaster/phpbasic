<?php

// hay muchos metodos que pueden manipular arrays. para mas informacion buscar funciones arrays php

$edades = [20,80,37,18,25,47];


// metodo  count: cuenta cuanto elementos hay en el array

$conteo = count($edades);
echo $conteo;

echo "\n \n"; 

//array_push , agrega un elemento al array despues del ultimo elemento


array_push($edades, 17);

var_dump($edades);
echo "\n \n";

//is_array: comprueba si es un arreglo o no;

echo is_array($edades);
echo "\n \n";
echo is_array($conteo); //asumo que no imprime pq da false
echo "\n \n";
var_dump(is_array($edades));
echo "\n \n";
var_dump(is_array($conteo));
echo "\n \n";

//explode: este metodo convierte un string con multiples datos separados por coma en un arreglo. 

$frutas = "manzana, cereza, peras, naranja";

$frutas_array = explode(",", $frutas);
var_dump($frutas_array);
echo "\n \n";

//implode: lo contrario a explode.

$nuevoFruta = implode(",",  $frutas_array);
var_dump($nuevoFruta);
echo "\n \n";