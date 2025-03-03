<?php 

//operador de asignacion

$edad_de_juanito = ($edad_de_jose = 18) + 5; 

echo $edad_de_jose;
echo "\n";
echo "\n";
echo $edad_de_juanito;
echo "\n";

//operador de incremento muy igual a js

$contador = 1 ;
$contador += 1;
$contador++;

echo "\n";

print_r($contador);

echo "\n";

// tambien existe -= o -- *= /=

$contador *= 5;
$contador--;
$contador /=2;

echo $contador;
echo "\n";

//concatenacion con .=

$nombre= "jose";
$nombre .= " " . "santana";

echo $nombre;
echo "\n";