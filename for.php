<?php

//ciclo for
echo "\n";
$users = ["master", "jose " ," jackson" ];


for ($i=0; $i < count($users); $i++) { 
   echo "Hola, bienvenido $users[$i] \n\n";
}


// multiple variables , multiples contadores


for ($i=0, $j=10; $i < 10 && $j > 5 ; $i++, $j--) { 
    echo "$i   $j  \n" ; 
    

}