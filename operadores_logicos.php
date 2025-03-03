<?php 

/* es la misma vaina que todos los operadores en otros lenguajes */

$michis_felinos = true; 
$michis_4_patas = true; 
$michis_vuelan = false; 
$michis_prog_php= false; 

//and

echo "Operador AND \n";

echo "Los gatos son felinos y tiene 4 patas?  \n";

echo "\n";
echo "\n";

var_dump($michis_felinos && $michis_4_patas);

echo "los gatos son felinos y vuelan \n";

echo "\n";
echo "\n";

var_dump($michis_felinos and $michis_vuelan);

echo "los gatos vuelan y programan php \n";

echo "\n";
echo "\n";

var_dump($michis_vuelan && $michis_prog_php);

echo "Operador OR \n";

echo "\n";
echo "\n";

//operadr OR

echo " los gatos tienen 4 patas o programan php ? \n";

var_dump($michis_4_patas || $michis_prog_php);

echo "\n";
echo "\n";

echo " los gatos vuelan o programan php ? \n";

var_dump($michis_vuelan || $michis_prog_php);

echo "\n";
echo "\n";

//operador NOT

echo "operador NOT \n";
echo "\n";

echo "los gatos NO son felinos ?\n";
var_dump(!$michis_felinos);

echo "\n";
echo " Los Gatos NO vuelan\n";
var_dump(!$michis_vuelan);

