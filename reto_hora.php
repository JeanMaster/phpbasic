<?php 

function hora_actual($format = "h:i:A") {
    date_default_timezone_set('America/Caracas');
    return date($format);
};

$hora = hora_actual();
  

echo "Hola, me podrias decir la hora \n";
echo "por supuesto, son las $hora \n";