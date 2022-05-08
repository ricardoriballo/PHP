<?php

$numeros = explode(",", $_GET["a"]);
$resultado;

function sumNumeros($array){
    $resultado= 0;
    foreach($array as $numero){
        $resultado = $resultado + $numero;
    }
    echo "El resultado de la suma de todos los numeros es $resultado <br>";

}

sumNumeros($numeros);

echo  "El resultado de la suma de todos los numeros es ". array_sum($numeros);
