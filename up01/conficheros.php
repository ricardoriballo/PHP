<?php 

file_put_contents("loremp-ipsum.txt", "Ricardo Riballo. \n", FILE_APPEND);



echo "Firma guardado <br>";

$contenido=file_get_contents("loremp-ipsum.txt");




echo str_replace("\n","<br>",$contenido);