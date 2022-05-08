<?php

$numero= isset($_GET["numero"])? (is_numeric($_GET["numero"])? $_GET["numero"] : 5) : 5;

$total= $numero;
$contador = 1;

while($total < 10000){
//    $total *= $numero;
//    $contador++;
$total = pow($numero, $contador ) ;
}

echo " si el número es $numero, el resultado es $contador => $total > 10.000"; 