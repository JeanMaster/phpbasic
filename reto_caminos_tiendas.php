<?php


$tiendas = [1 ,2 ,3 ,4 ,5,6,7,8] ;

foreach ($tiendas as $tienda => $value) {
    $tienda++;
    $camino= $value +  $tienda;   
    echo "$tienda $camino \n";

};

