<?php

    // reto de twich, la condicion es que si llegas a 100 $ puedes retirar el dinero


$donation = 150; 

     $retiro = readline("Cuanto desea retirar , el monto minimo es 100$ \n");

    if ( $retiro >= 100 ) {
        if( $retiro <=  $donation){
            $donation -=  $retiro;
            echo "tu retiro ha sido realizado con exito por el monto de $retiro $ \n";
            echo "Balance de tus donaciones: $donation \n";
        } else {
            echo "el monto excede la cantidad en donaciones, solo puedes ritrar un maximo de $donation \n";
        }
    } else {
        echo " retiro minimo ha de ser mas de 100$ \n";
    };

    var_dump($donation , $retiro);
    echo "\n";