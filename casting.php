<?php

// casting es forzar un tipo de dato a se convierta a otro por ejemplo: 

//es un string
$numerito = "5";


//casting to int
$numeritoCasteado = (int) $numerito;


var_dump($numerito);

echo "\n";

var_dump($numeritoCasteado);

echo "\n";

// otro ejemplo

$dia = 7.89;


$dia = (int) $dia;

var_dump($dia);

echo "\n";

//boleanos

$false = 0;
$true = 1;

$primero = (bool) $false;
$segundo = (bool) $true;

var_dump($primero);
echo "\n";
var_dump($segundo);

echo "\n";

