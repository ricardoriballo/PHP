<?php 

$cadenas = ["patata","cebolla","sal","pimienta","te","agua"];
$numeros = [];
foreach ($cadenas as $comida){
    array_push($numeros, strlen($comida));
}

echo min($numeros) , max($numeros); 


$longest = max(array_map("strlen", $cadenas));
$shortest = min(array_map("strlen", $cadenas));

echo "El string más corto es $shortest y el string más largo es $longest";

