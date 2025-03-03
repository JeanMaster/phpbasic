<?php

$michis = [
    "cobarde" => [
        "color" => "naranja",
        "profecion" => "huir",
        "comida" => [
            "comidaFav" => "pollo",
            "comidaDes" =>"gatarina",
        ]
    ],
    "lloron" => [
        "color" => "blanco con negro",
        "profecion"  => "lambucio",
        "comida" => [
            "comidaFav" => "todo",
            "comidaDes" => "nada,"
        ]
    ],
    
    "manchas" => [
        "color" => "negra con manchas blancas y marron",
        "profecion"  => "aventurera",
        "comida" => [
            "comidaFav" => "gatarina con leche",
            "comidaDes" => "arroz"
        ]
    ],


];

echo "la comida favorita de manchas es {$michis["manchas"]["comida"]["comidaFav"]} \n";

