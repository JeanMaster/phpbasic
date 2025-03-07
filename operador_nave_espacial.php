<?php

$arr_desordenado = [ 12,25,23,58,45,12,1,3,555];
$arr_ordenado = [...$arr_desordenado];
 usort($arr_ordenado, function($a,$b){
    return $a <=> $b;
});


var_dump($arr_desordenado);

echo "\n";  


var_dump($arr_ordenado);
