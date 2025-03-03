<?php
$horas= readline("Ingresa el numero de horas: ");
$minutos= readline("Ingresa el numero de minutos: ");
$segundos= readline("Ingresa el numero de segundos: ");

$totalSegundos=($horas*3600)+($minutos*60)+($segundos);

echo "El total de segundos es $totalSegundos \n";