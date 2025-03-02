<?php

// es casi igual que javascript u otros lenguajes usando == para una comparacion debil y === para una comparacon identica

$a = 5;
$b = "5";
$c = 6;
$d= 9;
$e = 5;

// usando ==

var_dump($a == $b); //devuelve true apesar de que b es texto.
var_dump($a == $e); //true
var_dump($a == $c); //false

echo "\n";


//usando operador identico ===


var_dump($a === $b); //devuelve false apesar de que b es texto.
var_dump($a === $e); //true
var_dump($a === $c); //false

//usando Operador difernete !=
echo "\n";

var_dump($a != $b); //devuelve false a pesar de que b es sring
var_dump($a != $e); //devuelve false
var_dump($a != $c); //devuelve true

//usando Operador difernete identico !==
echo "\n";

var_dump($a !== $b); //devuelve true pq ahora si es mas estricta la comparacion
var_dump($a !== $e); //devuelve false
var_dump($a !== $c); //devuelve true

//usando < menor que
echo "\n";

var_dump($a < $e); //devuelve false
var_dump($a < $b); //devuelve false
var_dump($a < $c); //devuelve true

//usando > mayor que 
echo "\n";

var_dump($a > $e); //devuelve false
var_dump($a > $b); //devuelve false
var_dump($a > $c); //devuelve true

// usando mayor o igual  >= y  <=  menor o igual

echo "\n";
var_dump($a >= $e); //devuelve true
var_dump($a >= $b); //devuelve true
var_dump($a >= $c); //devuelve false

echo "\n";
var_dump($a <= $e); //devuelve true
var_dump($a <= $b); //devuelve true
var_dump($a <= $c); //devuelve true


//OPERADOR ESPECIAL QUE SOLO PHP TIENE. OPERADOR DE NAVE ESPACIAL? WTF <=> 
// si el numero que esta a la derecha es mayor devuelve  1 
// si el numero que esta a la izquierda es mayor devuelve -1 
// si son igual devuelve 0 

echo "\n";

echo 2 <=> 1; //devuelve 1
echo "\n";
echo 2 <=> 2; // devuelve 0
echo "\n";
echo 1 <=> 2;  // devuelve -1
echo "\n";

// operador ?? fusion de null
// este operador devuelve un valor si la variable no existe.


$edad_de_juan= 23 ;

// esta variable no xiste entonces dice, si la variable de jose n oesta definido entocnes devuelve la de juan  y si esta no esta disponible la siguiente

echo $edad_de_jose ?? $edad_de_juan ?? $otrovalor ?? 0; // devuelve 23

echo "\n";