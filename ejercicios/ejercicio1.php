<?php

$valor = $_GET["titulo"];

echo "<h1>$valor</h1>";

$color = $_GET["color"];

echo "<h1>$color</h1>";

/* Luego al desplegarlo en el navegador. Seguido del nombre del fichero colocamos url + "?titulo={cualquiervalor}&&color={cualquiervalor}"*/
