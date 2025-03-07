<?php 

//if-else es muy igual que otros lenguajes

$entradas = 5;
$reserva = false;

if($reserva) {
    echo "Gracias por reservar con nosotros, que disfrute la pelicula \n";
    $reserva = false; 
} else if(  $entradas > 0) {
    echo "Su entrada esta  disponible, que disfrute la pelicula \n";
    --$entradas;
} else {
   echo  "no hay entradas para esta funcion, disculpe las molestias \n";
};

var_dump($entradas); echo "\n";
var_dump($reserva); echo "\n";


