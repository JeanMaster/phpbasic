<?php 


// las variables en php siempre comiensan coon el sigo dolar $

$numero_1 = 8;
$numero_2 = 7;

$numero_1 = 1;

echo $numero_1 + $numero_2;


// las constanstes se usan la funcione define("")

define("NUMERO_PI" , 3.14);

echo $numero_1 + $numero_2;
echo "\n";

echo $numero_1 + NUMERO_PI;

echo "\n";