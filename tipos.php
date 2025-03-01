<?php
//enteros
$numerINT = 1;

var_dump($numerINT);

echo "\n";

//float

$numeroFlOAT = 1.5; 

var_dump($numeroFlOAT);

echo "\n";

//string

$letraSTRING = "a";

$numeroSTRING = "20";

var_dump([$letraSTRING, $numeroSTRING]); //aprendi que  puedo poner un array

echo "\n";

var_dump($letraSTRING , $numeroSTRING); // tambien separado por coma

// las operaciones matematicas con string numericas hace que php formatee el string numero a numero.

echo "\n"; 

$suma = $numerINT + $numeroSTRING;

echo $suma;

echo "\n";

var_dump($suma);

echo "\n";

//advertencia , php puede sumar con strings y asi elimina el string por ejemplo;

$papas = "10 papas en el costal";
$cuantas_papas_hay = $papas + 5;

echo $cuantas_papas_hay;

echo "\n";