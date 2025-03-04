<?php

//switch es igual que een js tamben

$comensal = "caterine";

switch($comensal) {
    case "caterine": //no recueerdo esto sypogo que es igual que en js pero tiene sentido
    case "jose": 
        echo "su plato favorito es espagueti a la bologna \n";
    break;  
    case "pedro": 
        echo "su plato favorito es milanesa de pollo con arroz \n";
    break;  
    case "alejandra": 
        echo "Su plato favorito es ensalada cesar \n";
    break;  
    default: 
    echo " no hay comensal registado con ese nombre \n";
}