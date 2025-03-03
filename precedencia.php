<?php 

$contador = 1 ;
$resultado = $contador++; //primero asigna y luego suma dando un error en el dato esperado


echo $contador;
echo "\n";
echo $resultado; //resultado deberia devolver 2 pero en este caso devuelve 1

echo "\n";

//esto depende de la asociatividad de la operacion, se puede hackear con parentesis pero el operador arimetico de suma o resta tienen asociatividad de izqueirda

echo "\n";

echo 1 - 2 -3 ; 
echo "\n";
echo 1 - (2 -3) ;

echo "\n";
echo "\n";


//asociatiidad de derecha

$a = "a";
$b = "b";
$c = "c";

$letras = $a = $b = $c;

echo $letras;
echo "\n";