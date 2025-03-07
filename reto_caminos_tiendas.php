<?php


$temporal = 0; 
$resultado = 0;
$valor1 = 0 ; 
$valor2 = 1 ;

for ($i=2; $i <= 8 ; $i++) { 
    $temporal = $valor2;
    $resultado = $valor1 + $valor2;
    $valor1 = $temporal;
    $valor2 = $resultado;
    echo "para ir de la tienda 1 a la tienda $i existen $resultado caminos \n";
}