<?php

$users = ["jose", "pepe", "master", "loginator"];

do {
    $user = readline("ingrese su nombre de usuario:  ");

} while(in_array($user , $users));