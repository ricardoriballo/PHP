<?php


$file = fopen("texto.txt", "r");





while ($text = fgets($file)) {

    $palabras = explode(" ", $text);

    $array = array_splice($palabras, 2);

    $numero = strlen(implode(" ", $array));

    $count = count($array);




    echo  "$text tiene  $count palabras -> y $numero  letras" . "<br />";

}