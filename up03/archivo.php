<?php

use LDAP\Result;

$word = $_REQUEST["palabra"];
$fichero = $_FILES["fichero"]["tmp_name"];


$contenido=file_get_contents($fichero);

$result= substr_count(strtolower($contenido), strtolower($word));

echo "El fichero $fichero contiene $result veces '$word' ";