<?php

$frase = $_GET["frase"];

if(strrev($frase)== $frase){
    echo "es capicuo";
} else {
    echo "no es capicuo";
}