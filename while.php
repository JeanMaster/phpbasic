<?php 

//ciclos while

$zapatosPares = 22; 

while ($zapatosPares) {
    $compra = readline("cuantos pares de zapatos quiere comprar:  \n");
    $zapatosPares -= $compra;
    echo "quedan $zapatosPares Pares de zapatos disponibles \n";
}